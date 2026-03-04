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
class VehicleEdit extends Component
{
    use WithFileUploads;
    public Vehicle $vehicle;

    #[Validate('required|string')]
    public $vin_number = '';

    #[Validate('required|string|max:255')]
    public $make = '';

    #[Validate('required|string|max:255')]
    public $model = '';

    #[Validate('required|integer|min:2019|max:2026')]
    public $year_of_reg;

    #[Validate('required|integer|min:0')]
    public $mileage;

    #[Validate('required|string')]
    public $engine_capacity;

    #[Validate('required|in:Automatic,Manual')]
    public $transmission;

    #[Validate('required|in:Petrol,Diesel,Hybrid')]
    public $fuel_type;

    #[Validate('required|string')]
    public $auction_grade;

    #[Validate('required|numeric|min:0')]
    public $cif_price_min;

    #[Validate('required|numeric|min:0')]
    public $cif_price_max;

    #[Validate('boolean')]
    public $is_available;

    #[Validate('array|max:5')]
    public $images = [];

    #[Validate('nullable|image|max:5120')] // optional, 5MB max per image
    public $newImage = null;

    public function mount($id)
    {
        $this->vehicle = Vehicle::findOrFail($id);
        
        $this->vin_number = $this->vehicle->vin_number;
        $this->make = $this->vehicle->make;
        $this->model = $this->vehicle->model;
        $this->year_of_reg = $this->vehicle->year_of_reg;
        $this->mileage = $this->vehicle->mileage;
        $this->engine_capacity = $this->vehicle->engine_capacity;
        $this->transmission = $this->vehicle->transmission;
        $this->fuel_type = $this->vehicle->fuel_type;
        $this->auction_grade = $this->vehicle->auction_grade;
        $this->cif_price_min = $this->vehicle->cif_price_min;
        $this->cif_price_max = $this->vehicle->cif_price_max;
        $this->is_available = $this->vehicle->is_available;
        $this->images = $this->vehicle->images ?? [];
    }

    public function addImage()
    {
        if (count($this->images) >= 5) {
            $this->addError('images', 'You can only upload up to 5 images.');
            return;
        }

        $this->validate(['newImage' => 'required|image|max:5120']);
        
        if ($this->newImage) {
            // Store the file and save the path (not the full URL)
            $path = $this->newImage->store('vehicles', 'public');
            $this->images[] = $path;  // Store just the path, not the full URL
            $this->newImage = null;
            $this->resetValidation(['newImage', 'images']);
        }
    }

    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }

    public function update()
    {
        $this->validate([
            'vin_number' => 'required|string',
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

        $this->vehicle->update([
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

        session()->flash('message', 'Vehicle updated successfully!');

        return redirect()->route('admin.vehicles.index');
    }

    public function render()
    {
        return view('livewire.admin.vehicle-edit', [
            'pageTitle' => $this->vehicle->full_name . ' - Edit Vehicle'
        ]);
    }
}
