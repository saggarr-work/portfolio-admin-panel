<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    private static $service;

    public static function newService($request){
        self::$service = new Service();
        self::$service->fieldOfService = $request->fieldOfService;
        self::$service->save();
    }

    public static function updateService($request, $id){
        self::$service = Service::find($id);
        self::$service->fieldOfService = $request->fieldOfService;
        self::$service->save();
    }
    
    public static function deleteService($id){
        self::$service = Service::find($id);
        self::$service->serviceDetails()->delete();
        self::$service->delete();
    }

    public function serviceDetails(){
        return $this->hasMany(ServiceDetails::class);
    }
}
