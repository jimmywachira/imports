<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\Cars;
use App\Livewire\CarDetails;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\VehicleManagement;
use App\Livewire\Admin\VehicleCreate;
use App\Livewire\Admin\VehicleEdit;
use App\Http\Controllers\ContactFormController;
use App\Models\Vehicle;

Route::redirect('/', '/cars')->name('home');

// Public Routes
Route::get('/', Search::class)->name('search');
Route::get('/cars', Cars::class)->name('cars');
Route::get('/cars/{slug}', CarDetails::class)->name('car.details');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');
Route::post('/contact/public-submit', [ContactFormController::class, 'submitPublic'])
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])
    ->middleware('throttle:10,1')
    ->name('contact.public.submit');
Route::view('/testimonials', 'testimonials')->name('testimonials');
Route::view('/inspection-reports', 'inspection')->name('inspection');
Route::view('/shipping-clearing', 'shipping')->name('shipping');
Route::view('/vehicle-history', 'history')->name('history');
Route::view('/trade-in-program', 'tradein')->name('tradein');
Route::view('/car-importation', 'importation')->name('importation');
Route::view('/advisory', 'advisory')->name('advisory');
Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-of-service', 'terms')->name('terms');

Route::get('/sitemap.xml', function () {
    $staticUrls = array_values(array_unique([
        url('/'),
        route('cars'),
        route('about'),
        route('contact'),
        route('testimonials'),
        route('inspection'),
        route('shipping'),
        route('history'),
        route('tradein'),
        route('advisory'),
        route('privacy'),
        route('terms'),
    ]));

    $vehicles = Vehicle::query()
        ->where('is_available', true)
        ->latest('updated_at')
        ->get(['slug', 'updated_at']);

    return response()
        ->view('sitemap', compact('staticUrls', 'vehicles'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

// Admin Routes (Protected)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    
    // Vehicle Management
    Route::get('/vehicles', VehicleManagement::class)->name('vehicles.index');
    Route::get('/vehicles/create', VehicleCreate::class)->name('vehicles.create');
    Route::get('/vehicles/{id}/edit', VehicleEdit::class)->name('vehicles.edit');
});

// Old Dashboard Route (Redirect to Admin Dashboard)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('/dashboard', '/admin/dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
