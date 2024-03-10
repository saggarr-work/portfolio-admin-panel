<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    private static $header, $image, $imageName, $imageDirectory, $cv, $cvName, $cvDirectory;

    public static function imageUpload($request){
        self::$image = $request->file('photo');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'uploads/header-photo/';
        self::$image->move(self::$imageDirectory, self::$imageName);
        return self::$imageDirectory . self::$imageName;
    }

    public static function cvUpload($request){
        self::$cv = $request->file('cv');
        self::$cvName = self::$cv->getClientOriginalName();
        self::$cvDirectory = 'uploads/cv/';
        self::$cv->move(self::$cvDirectory, self::$cvName);
        return self::$cvDirectory . self::$cvName;
    }

    public static function newHeader($request){
        self::$header = new Header();
        self::$header->fullName = $request->fullName;
        self::$header->designation = $request->designation;
        self::$header->cv = self::cvUpload($request);
        self::$header->photo = self::imageUpload($request);
        self::$header->githubLink = $request->githubLink;
        self::$header->facebookLink = $request->facebookLink;
        self::$header->instagramLink = $request->instagramLink;
        self::$header->whatsappLink = $request->whatsappLink;
        self::$header->save();
    }

    public static function updateHeader($request, $id){
        self::$header = Header::find($id);
        self::$header->fullName = $request->fullName;
        self::$header->designation = $request->designation;
        if ($request->file('cv')) {
            if (file_exists(self::$header->cv)) {
                unlink(self::$header->cv);
            }
            self::$header->cv = self::cvUpload($request);
        }
        if ($request->file('photo')) {
            if (file_exists(self::$header->photo)) {
                unlink(self::$header->photo);
            }
            self::$header->photo = self::imageUpload($request);
        }
        self::$header->githubLink = $request->githubLink;
        self::$header->facebookLink = $request->facebookLink;
        self::$header->instagramLink = $request->instagramLink;
        self::$header->whatsappLink = $request->whatsappLink;
        self::$header->save();
    }

    public static function deleteHeader($id){
        self::$header = Header::find($id);
        if(file_exists(self::$header->cv)){
            unlink(self::$header->cv);
        }
        if (file_exists(self::$header->photo)) {
            unlink(self::$header->photo);
        }
        self::$header->delete();
    }
}
