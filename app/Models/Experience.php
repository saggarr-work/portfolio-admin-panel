<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    private static $experience;

    public static function newExperience($request){
        self::$experience = new Experience();
        self::$experience->fieldOfExperience = $request->fieldOfExperience;
        self::$experience->save();
    }

    public static function updateExperience($request, $id){
        self::$experience = Experience::find($id);
        self::$experience->fieldOfExperience = $request->fieldOfExperience;
        self::$experience->save();
    }
    
    public static function deleteExperience($id){
        self::$experience = Experience::find($id);
        self::$experience->experienceDetails()->delete();
        self::$experience->delete();
    }

    public function experienceDetails(){
        return $this->hasMany(ExperienceDteails::class);
    }
}
