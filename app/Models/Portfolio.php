<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    private static $portfolio, $thumbnail, $thumbnailName, $thumbnailDirectory;

    public static function thumbnailUpload($request){
        self::$thumbnail = $request->file('thumbnail');
        self::$thumbnailName = self::$thumbnail->getClientOriginalName();
        self::$thumbnailDirectory = 'uploads/portfolio-thumbnail/';
        self::$thumbnail->move(self::$thumbnailDirectory, self::$thumbnailName);
        return self::$thumbnailDirectory . self::$thumbnailName;
    }

    public static function newPortfolio($request){
        self::$portfolio = new Portfolio();
        self::$portfolio->thumbnail = self::thumbnailUpload($request);
        self::$portfolio->title = $request->title;
        self::$portfolio->githubLink = $request->githubLink;
        self::$portfolio->liveDemo = $request->liveDemo;
        self::$portfolio->save();
    }

    public static function updatePortfolio($request, $id){
        self::$portfolio = Portfolio::find($id);
        if($request->file('thumbnail')){
            if(file_exists(self::$portfolio->thumbnail)){
                unlink(self::$portfolio->thumbnail);
            }
            self::$portfolio->thumbnail = self::thumbnailUpload($request);
        }
        self::$portfolio->title = $request->title;
        self::$portfolio->githubLink = $request->githubLink;
        self::$portfolio->liveDemo = $request->liveDemo;
        self::$portfolio->save();
    }
    
    public static function deletePortfolio($id){
        self::$portfolio = Portfolio::find($id);
        if(file_exists(self::$portfolio->thumbnail)){
            unlink(self::$portfolio->thumbnail);
        }
        self::$portfolio->delete();
    }
}
