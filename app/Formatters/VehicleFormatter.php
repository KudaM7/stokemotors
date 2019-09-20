<?php
namespace App\Formatters;

use App\Models\BodyStyle;
use App\Models\Dealer;
use App\Models\Drivetrain;
use App\Models\ExteriorColour;
use App\Models\FuelType;
use App\Models\Transmission;
use App\Models\Vehicle;
use App\Models\VehicleEdition;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use App\Models\VehicleState;

class VehicleFormatter
{
    // public $vehicleId;

    // public $vehicle;

    public function setVehicleId($vehicleId)
    {
        $this->vehicleId = $vehicleId;
        return $this;
    }

    public function getVehicle()
    {
        $vehicle = Vehicle::where('id', $this->vehicleId)->first();
        return $this->formatter($vehicle);
    }

    protected function formatter($vehicle)
    {
        return ([
            'id' => $vehicle->id,
            'dealer' => $this->dealer($vehicle->dealer_id),
            'make' => $this->make($vehicle->make_id),
            'model' => $this->model($vehicle->model_id),
            'edition' => $this->edition($vehicle->edition_id),
            'registration' => $vehicle->registration,
            'year' => $vehicle->year,
            'transmission' => $this->transmission($vehicle->transmission_id),
            'body_style' => $this->body_style($vehicle->body_style_id),
            'fuel_type' => $this->fuel_type($vehicle->fuel_type_id),
            'exterior_colour' => $this->exterior_colour($vehicle->exterior_colour_id),
            'state_of_vehicle' => $this->state_of_vehicle($vehicle->state_of_vehicle_id),
            'drivetrain' => $this->drivetrain($vehicle->drivetrain_id),
            'price' => $vehicle->price,
            'vin' => $vehicle->vin,
            'mileage' => $vehicle->mileage,
            'number_of_doors' => $vehicle->number_of_doors,
            'added_to_stock' => $vehicle->added_to_stock,
            'description' => $vehicle->description,
            'archive' => $vehicle->archive,
            'purchased' => $vehicle->purchased
        ]);
    }

    protected function dealer($id)
    {
        $dealer = Dealer::where('id', $id)->first();
        return ([
            'id' => $dealer->id,
            'name' => $dealer->name
        ]);
    }

    protected function make($id)
    {
        $make = VehicleMake::where('id', $id)->first();
        return ([
            'id' => $make->id,
            'name' => $make->name
        ]);
    }

    protected function model($id)
    {
        $model = VehicleModel::where('id', $id)->first();
        return ([
            'id' => $model->id,
            'name' => $model->name
        ]);
    }

    protected function edition($id)
    {
        $edition = VehicleEdition::where('id', $id)->first();
        return ([
            'id' => $edition->id,
            'name' => $edition->name
        ]);
    }

    protected function transmission($id)
    {
        $transmission = Transmission::where('id', $id)->first();
        return ([
            'id' => $transmission->id,
            'name' => $transmission->name
        ]);
    }

    protected function body_style($id)
    {
        $body_style = BodyStyle::where('id', $id)->first();
        return ([
            'id' => $body_style->id,
            'name' => $body_style->name
        ]);
    }

    protected function fuel_type($id)
    {
        $fuel_type = FuelType::where('id', $id)->first();
        return ([
            'id' => $fuel_type->id,
            'name' => $fuel_type->name
        ]);
    }

    protected function exterior_colour($id)
    {
        $exterior_colour = ExteriorColour::where('id', $id)->first();
        return ([
            'id' => $exterior_colour->id,
            'name' => $exterior_colour->name
        ]);
    }

    protected function state_of_vehicle($id)
    {
        $state_of_vehicle = VehicleState::where('id', $id)->first();
        return ([
            'id' => $state_of_vehicle->id,
            'name' => $state_of_vehicle->name
        ]);
    }

    protected function drivetrain($id)
    {
        $drivetrain = Drivetrain::where('id', $id)->first();
        return ([
            'id' => $drivetrain->id,
            'name' => $drivetrain->name
        ]);
    }
}
