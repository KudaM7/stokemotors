<?php

namespace App\Http\Controllers;

use App\Formatters\VehicleFormatter;
use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    protected $formatter;
    public function __construct(VehicleFormatter $vf)
    {
        $this->formatter = $vf;
    }

    public function create(Request $request)
    {
        return $request;
        // $this->validate($request, []);
    }

    public function listVehicles()
    {
        $vehicles = Vehicle::paginate(10);
        return $vehicles->transform(function ($item){
            return $this->formatter->setVehicleId($item->id)->getVehicle();
        });
    }

    public function listMakes(){
        $makes = VehicleMake::paginate(10);
        return (['data' => $makes]);
    }

    public function listModels()
    {
        $models = VehicleModel::query()->join('vehicle_makes', 'vehicle_models.make_id', '=', 'vehicle_makes.id')
        ->select('vehicle_models.id', 'vehicle_models.name as modelName', 'vehicle_models.make_id', 'vehicle_makes.name as makeName')
        ->get();
        return(['data' => $models]);
    }

    public function vehicleDetails($vehicleId)
    {
        return $this->formatter->setVehicleId($vehicleId)->getVehicle();
    }
}
