<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:5000',
        ]);

        try {
            // Save contact message to database
            Contact::create($validated);

            // Send email to company email address
            Mail::to('info@xplorecar.com')
                ->send(new ContactFormMail($validated));

            return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again later.')->withInput();
        }
    }

    public function submitPublic(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:5000',
            'return_to' => 'nullable|url|max:2048',
        ]);

        $defaultReturnTo = rtrim(config('app.frontend_url', config('app.url')), '/') . '/contact?status=sent';
        $returnTo = $validated['return_to'] ?? $defaultReturnTo;

        try {
            Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
            ]);

            Mail::to('info@xplorecar.com')
                ->send(new ContactFormMail($validated));

            return redirect()->away($returnTo);
        } catch (\Exception $e) {
            $errorReturnTo = preg_match('/\?/', $returnTo)
                ? $returnTo . '&status=error'
                : $returnTo . '?status=error';

            return redirect()->away($errorReturnTo);
        }
    }
}
