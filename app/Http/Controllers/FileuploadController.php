<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileuploadController extends Controller
{
    public function index(){
        return view('fileupload.fileupload');
    }

    public function store(Request $fdata){             
        if($fdata->hasFile('image')){
            //return $fdata->file('image');             //show the file path
            //return $fdata->image->path();             //show the file path
            //return $fdata->image->extension();        //show the extension

            //return $fdata->image->store('public');    //upload the file to storage's upload folder

            //Another way to upload
            //return Storage::putFile('public/allimages', $fdata->file('image'));

            return $fdata->image->storeAs('public/allimages','jewel.jpg');

        }   
        else{
            //return "No file selected";
            echo "No file selected";
        }
    }

    public function show(){
        //return Storage::files('upload');
        //Storage::makeDirectory('upload/jewel');

        /*if(Storage::deleteDirectory('upload/jewel')){
            return "Deleted successfully";
        }
        return Storage::allFiles('upload'); */

        //return $size= Storage::size('public/allimages/jewel.jpg');
        //return $lmdate= Storage::lastModified('public/allimages/jewel.jpg');
        //return $copy= Storage::copy('public/allimages/jewel.jpg','jewel.jpg');

        /*$move= Storage::move('jewel.jpg','public/allimages/jewel.jpg');
        if($move){
            return "Moved";
        }*/

        /*$rawContent = Storage::get('public/allimages/jewel.jpg');
        if(Storage::put('newImage.jpg', $rawContent)){
            return 'File is created';
        }*/

        Storage::delete('newImage.jpg','public/name2.jpg');


        //$url= Storage::url('allimages/jewel.jpg');
        //return "<img src='".$url."' />";
    }
}
