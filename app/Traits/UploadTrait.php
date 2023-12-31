<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;
trait UploadTrait
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public')
    {
            // Generate a unique name for the image
            $file_name =  strtoupper(uniqid()) .'.'.$uploadedFile->getClientOriginalExtension();
                // Optimize the uploaded image
        
        try{
          $uploadedFile->storeAs($folder,$file_name, $disk);

        } catch (\Exception $e) {
            // Handle the exception (e.g., log it or display an error message)
            dd($e->getMessage());
        }
            // Get the path where you want to save the image and thumbnail
            $directory = public_path('uploads/thumbnail');
   
            // Check if the directory exists, if not, create it
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0755, true, true);
            }
            $image = Image::make($uploadedFile);
            // Calculate the new height to maintain the aspect ratio
            // $thumbnailWidth = 100;
            // $thumbnailHeight = ($image->height() * $thumbnailWidth) / $image->width();
            // Resize the image to the thumbnail size
            // $image->resize($thumbnailWidth, $thumbnailHeight);

            // Generate a thumbnail and save it to the specified directory
            $thumbnailName = 'thumb_'.$file_name;
            Image::make($uploadedFile)->fit(100, 75)->save($directory.'/'.$thumbnailName);
            $image->save($directory.'/'. $thumbnailName);
            return ['file_name' => $file_name, 'thumbnail_name' => $thumbnailName];

          
         
    }




    public function uploadPdf(UploadedFile $uploadedpdf, $pdffolder = null, $disk = 'public')
    {
            // Generate a unique name for the image
            $fileName =  strtoupper(uniqid()) .'.'.$uploadedpdf->getClientOriginalExtension();
                // Optimize the uploaded image
        
        try{
                $uploadedpdf->storeAs($pdffolder,$fileName, $disk);

        } catch (\Exception $e) {
            // Handle the exception (e.g., log it or display an error message)
            dd($e->getMessage());
        }
     
        Log::info('PDF file added  ');

            return $fileName;

          
         
    }


    // unlink_pdf_file



    public function unlink_pdf_file($model, $pdfField = 'pdf_file')
    {
        $pdfPath = Storage::path('public/pdf_docs/' . $model->$pdfField);
        if (File::exists($pdfPath) && isset($model->$pdfField)) {
            unlink($pdfPath);
            Log::info('old PDF file  remved ');

        }

    
    }



    public function unlinkNewsImage($model, $imageField = 'image', $thumbnailField = 'thumbnail')
    {
        $imagePath = Storage::path('public/news_gallery/' . $model->$imageField);

        if (File::exists($imagePath) && isset($model->$imageField)) {
            unlink($imagePath);
            Log::info('News main  Image remved ');

        }

        if ($model->$thumbnailField) {
            $thumbnailPath = public_path('uploads/thumbnail/' . $model->$thumbnailField);
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);
            }
            Log::info('News thumbnail  Image Removed ');
        }
    }



    // public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public'){
    //     // Generate a unique name for the image
    //     $filetype   =  $uploadedFile->getMimeType();
    //     $file_name  =  strtoupper(uniqid()) .'.'.$uploadedFile->getClientOriginalExtension();
    //     $filepath   =  $uploadedFile->storeAs($folder,$file_name, $disk);
    //     $filePathOnly = $folder;

    //     // Get the path where you want to save the image and thumbnail
    //     $directory = public_path('uploads/thumbnail');

    //     // Check if the directory exists, if not, create it
    //     if (!File::exists($directory)) {
    //         File::makeDirectory($directory, 0755, true, true);
    //     }
    //     // Generate a thumbnail and save it to the specified directory
    //     $thumbnailName = 'thumb_' . $file_name;
    //     Image::make($uploadedFile)->fit(100, 100)->save($directory.'/'.$thumbnailName);

    //     return [
    //         'file_name' => $file_name,
    //         'thumbnail_name' => $thumbnailName,
    //         'filepath' => $filePathOnly, // This will contain the path relative to the storage disk
    //         'filetype' => $filetype,
    //     ];
    // }

}
