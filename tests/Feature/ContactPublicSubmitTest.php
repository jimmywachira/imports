<?php

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

it('submits public contact form, redirects to success url, stores message, and sends email', function () {
    Mail::fake();

    $payload = [
        'name' => 'Test User',
        'email' => 'test.user@example.com',
        'phone' => '+254700000001',
        'subject' => 'Car Inquiry',
        'message' => 'I want to import a Mazda CX-5 and need guidance.',
        'return_to' => 'https://frontend.example/contact?status=sent',
    ];

    $response = $this->post('/contact/public-submit', $payload);

    $response->assertRedirect('https://frontend.example/contact?status=sent');

    $this->assertDatabaseHas('contacts', [
        'name' => $payload['name'],
        'email' => $payload['email'],
        'phone' => $payload['phone'],
        'subject' => $payload['subject'],
        'message' => $payload['message'],
    ]);

    Mail::assertSent(ContactFormMail::class, function (ContactFormMail $mail) use ($payload) {
        return $mail->formData['email'] === $payload['email']
            && $mail->formData['subject'] === $payload['subject'];
    });
});
