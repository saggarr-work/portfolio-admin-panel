<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    private static $testimonial, $avatar, $avatarName, $avatarDirectory;

    public static function avatarUpload($request){
        self::$avatar = $request->file('avatar');
        self::$avatarName = self::$avatar->getClientOriginalName();
        self::$avatarDirectory = 'uploads/testimonial-avatar/';
        self::$avatar->move(self::$avatarDirectory, self::$avatarName);
        return self::$avatarDirectory . self::$avatarName;
    }

    public static function newTestimonial($request){
        self::$testimonial = new Testimonial();
        self::$testimonial->avatar = self::avatarUpload($request);
        self::$testimonial->name = $request->name;
        self::$testimonial->review = $request->review;
        self::$testimonial->save();
    }
    
    public static function updateTestimonial($request, $id){
        self::$testimonial = Testimonial::find($id);
        if($request->file('avatar')){
            if(file_exists(self::$testimonial->avatar)){
                unlink(self::$testimonial->avatar);
            }
            self::$testimonial->avatar = self::avatarUpload($request);
        }
        self::$testimonial->name = $request->name;
        self::$testimonial->review = $request->review;
        self::$testimonial->save();
    }

    public static function deleteTestimonial($id){
        self::$testimonial = Testimonial::find($id);
        if(file_exists(self::$testimonial->avatar)){
            unlink(self::$testimonial->avatar);
        }
        self::$testimonial->delete();
    }
}
