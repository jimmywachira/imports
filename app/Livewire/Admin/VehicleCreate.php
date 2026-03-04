<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Vehicle;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.app')]
#[Title('Create Vehicle - Admin')]
class VehicleCreate extends Component
{
    use WithFileUploads;
    #[Validate('required|unique:vehicles,vin_number')]
    public $vin_number = '';

    #[Validate('required|string|max:255')]
    public $make = '';

    #[Validate('required|string|max:255')]
    public $model = '';

    #[Validate('required|integer|min:2019|max:2026')]
    public $year_of_reg = 2024;

    #[Validate('required|integer|min:0')]
    public $mileage = 0;

    #[Validate('required|string')]
    public $engine_capacity = '';

    #[Validate('required|in:Automatic,Manual')]
    public $transmission = 'Automatic';

    #[Validate('required|in:Petrol,Diesel,Hybrid')]
    public $fuel_type = 'Petrol';

    #[Validate('required|string')]
    public $auction_grade = '4';

    #[Validate('required|numeric|min:0')]
    public $cif_price_min = 0;

    #[Validate('required|numeric|min:0|gte:cif_price_min')]
    public $cif_price_max = 0;

    #[Validate('boolean')]
    public $is_available = true;

    #[Validate('array|max:5')]
    public $images = [];

    #[Validate('nullable|image|max:5120')] // 5MB max per image
    public $newImage = null;

    public function addImage()
    {
        // Enforce 5 image limit
        if (count($this->images) >= 5) {
            session()->flash('error', 'Maximum 5 images allowed per vehicle.');
            return;
        }

        $this->validate(['newImage' => 'required|image|max:5120']);
        
        if ($this->newImage) {
            // Store the file and save the path (not the full URL)
            $path = $this->newImage->store('vehicles', 'public');
            $this->images[] = $path;  // Store just the path, not the full URL
            $this->newImage = null;
            
            // Reset validation state for the newImage field
            $this->resetValidation(['newImage', 'images']);
        }
    }

    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }

    public function save()
    {
        // Validate with explicit rules to ensure newImage is properly handled
        $this->validate([
            'vin_number' => 'required|unique:vehicles,vin_number',
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year_of_reg' => 'required|integer|min:2019|max:2026',
            'mileage' => 'required|integer|min:0',
            'engine_capacity' => 'required|string',
            'transmission' => 'required|in:Automatic,Manual',
            'fuel_type' => 'required|in:Petrol,Diesel,Hybrid',
            'auction_grade' => 'required|string',
            'cif_price_min' => 'required|numeric|min:0',
            'cif_price_max' => 'required|numeric|min:0|gte:cif_price_min',
            'is_available' => 'boolean',
            'images' => 'array|max:5',
            'newImage' => 'nullable|image|max:5120',
        ]);

        if ($this->newImage) {
            $this->addImage();
        }

        $vehicle = Vehicle::create([
            'vin_number' => $this->vin_number,
            'make' => $this->make,
            'model' => $this->model,
            'year_of_reg' => $this->year_of_reg,
            'mileage' => $this->mileage,
            'engine_capacity' => $this->engine_capacity,
            'transmission' => $this->transmission,
            'fuel_type' => $this->fuel_type,
            'auction_grade' => $this->auction_grade,
            'cif_price_min' => $this->cif_price_min,
            'cif_price_max' => $this->cif_price_max,
            'slug' => Str::slug($this->make . ' ' . $this->model . ' ' . $this->year_of_reg . ' ' . $this->vin_number),
            'is_available' => $this->is_available,
            'images' => !empty($this->images) ? $this->images : null,
        ]);

        session()->flash('message', 'Vehicle created successfully!');

        return redirect()->route('admin.vehicles.index');
    }

    public function render()
    {
        return view('livewire.admin.vehicle-create');
    }
}
