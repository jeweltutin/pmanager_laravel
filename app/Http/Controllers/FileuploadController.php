<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Fileupload;    //For using the model

class FileuploadController extends Controller
{
    public function index(){
        return view('fileupload.fileupload');
    }

    public function showfileform(){
        return view('fileupload.showform');
    }

    public function storeFile(Request $myimage){
        //return $myimage->all();
        if($myimage->hasFile('image')){
            foreach($myimage->image as $oboimage){
                $imagenames = $oboimage->getClientOriginalName();
                //print_r($imagenames."<br />");
                $imagesize = $oboimage->getClientSize();
    
                $oboimage->storeAs('public/allimages',$imagenames);
    
                $file= new Fileupload;
                $file->name = $imagenames;
                $file->size = $imagesize;
                $file->save();
                
            }
            return back()->with('successmsg','File uploaded successfully :)');       

            //***For Single file */
            /*$imagename = $myimage->image->getClientOriginalName();
            $imagesize = $myimage->image->getClientSize();

            //$myimage->image->store('public/allimages');
            $myimage->image->storeAs('public/allimages',$imagename);

            $file= new Fileupload;
            $file->name = $imagename;
            $file->size = $imagesize;
            $file->save();

            //return "File uploaded successfully";
           **/
        }
    }

    /**
     * File security/ Protect your file
     * This will needed for testing
     * http://localhost:8000/uploadedFile/jewelimage.jpg 
     */

    public function getFile($filename){
        //return $filename;
        return response()->download(Storage_path('app/public/allimages/'.$filename,null,[],null));

        /*try{
            return response()->download(Storage_path('public/allimages/'.$filename,nul,[],null));
        }
        catch(\Exception $e){
            return 'File not found';

        }*/
    }

    public function store(Request $fdata){     

        if($fdata->hasFile('image')){
            return $fdata->file('image');             //show the file path
            //return $fdata->image->path();             //show the file path
            //return $fdata->image->extension();        //show the extension

            //return $fdata->image->store('public');    //upload the file to storage's upload folder

            //Another way to upload
            //return Storage::putFile('public/allimages', $fdata->file('image'));

            //return $fdata->image->storeAs('public/allimages','jewel.jpg');

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
