<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;
    private static $serviceDetails;

    public static function newServiceDetails($request){
        self::$serviceDetails = new ServiceDetails();
        self::$serviceDetails->service_id = $request->service_id;
        self::$serviceDetails->heading = $request->heading;
        self::$serviceDetails->description = $request->description;
        self::$serviceDetails->save();
    }

    public static function updateServiceDetails($request, $id){
        self::$serviceDetails = ServiceDetails::find($id);
        self::$serviceDetails->service_id = $request->service_id;
        self::$serviceDetails->heading = $request->heading;
        self::$serviceDetails->description = $request->description;
        self::$serviceDetails->save();
    }
    
    public static function deleteServiceDetails($id){
        self::$serviceDetails = ServiceDetails::find($id);
        self::$serviceDetails->delete();
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
