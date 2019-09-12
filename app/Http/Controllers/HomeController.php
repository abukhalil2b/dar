<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Week;
use App\Level;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }



/*
$mediaItems[0]->size; // Returns the size in bytes
$mediaItems[0]->human_readable_size; // Returns the size in a human readable format (eg. 1,5 MB)
$mediaItems[0]->delete();
$newsItem->delete(); // all associated files will be deleted as well
$newsItem->clearMediaCollection(); // all media will be deleted
$newsItem->clearMediaCollection('images'); // all media in the images collection will be deleted
$newsItem->clearMediaCollectionExcept('images', $newsItem->getFirstMedia()); // This will remove all associated media in the 'images' collection except the first media

*/

/*
$yourModel->addMedia($pathToImage)->toMediaCollection('avatar');
$yourModel->getMedia('avatar')->count(); // returns 1
$yourModel->getFirstMediaUrl('avatar'); // will return an url to the `$pathToImage` file
When adding another file to a single file collection the first one will be deleted.

// this will remove other files in the collection
$yourModel->addMedia($anotherPathToImage)->toMediaCollection('avatar');
$yourModel->getMedia('avatar')->count(); // returns 1
$yourModel->getFirstMediaUrl('avatar'); // will return an url to the `$anotherPathToImage` file
*/

    public function createUpload()
    {
        $user = auth()->user();
        $images = auth()->user()->getMedia('images');
         // $media[0] =  $user->getMedia('images')[0]->getUrl();
         // $media[1] =  $user->getMedia('images')[0]->getFullUrl();
         // $media[2] =  $user->getMedia('images')[0]->getPath();
         // return $media;
        return view('upload',compact('user','images'));
    }

    public function storeUpload(Request $request)
    {
        //return $request->all();
        $user = auth()->user();
        $user->addMedia($request->image)
        ->usingName('pic')
        ->toMediaCollection('images');
        return redirect()->back();
    }
}
