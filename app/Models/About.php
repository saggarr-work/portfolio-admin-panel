<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    private static $about, $image, $imageName, $imageDirectory;

    public static function imageUpload($request){
        self::$image = $request->file('photo');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'uploads/about-photo/';
        self::$image->move(self::$imageDirectory, self::$imageName);
        return self::$imageDirectory . self::$imageName;
    }

    public static function newAbout($request){
        self::$about = new About();
        self::$about->experience = $request->experience;
        self::$about->client = $request->client;
        self::$about->project = $request->project;
        self::$about->photo = self::imageUpload($request);
        self::$about->description = $request->description;
        self::$about->save();
    }

    public static function updateAbout($request, $id){
        self::$about = About::find($id);
        self::$about->experience = $request->experience;
        self::$about->client = $request->client;
        self::$about->project = $request->project;
        if($request->file('photo')){
            if(file_exists(self::$about->photo)){
                unlink(self::$about->photo);
            }
            self::$about->photo = self::imageUpload($request);
        }
        self::$about->description = $request->description;
        self::$about->save();
    }

    public static function deleteAbout($id){
        self::$about = About::find($id);
        if(file_exists(self::$about->photo)){
            unlink(self::$about->photo);
        }
        self::$about->delete();
    }
}
