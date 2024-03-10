<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceDteails extends Model
{
    use HasFactory;
    private static $experienceDetails;

    public static function newExperienceDetails($request){
        self::$experienceDetails = new ExperienceDteails();
        self::$experienceDetails->experience_id = $request->experience_id;
        self::$experienceDetails->languageOrTools = $request->languageOrTools;
        self::$experienceDetails->levelOfExperience = $request->levelOfExperience;
        self::$experienceDetails->save();
    }
    
    public static function updateExperienceDetails($request, $id){
        self::$experienceDetails = ExperienceDteails::find($id);
        self::$experienceDetails->experience_id = $request->experience_id;
        self::$experienceDetails->languageOrTools = $request->languageOrTools;
        self::$experienceDetails->levelOfExperience = $request->levelOfExperience;
        self::$experienceDetails->save();
    }

    public static function deleteExperienceDetails($id){
        self::$experienceDetails = ExperienceDteails::find($id);
        self::$experienceDetails->delete();
    }

    public function experience(){
        return $this->belongsTo(Experience::class);
    }
}
