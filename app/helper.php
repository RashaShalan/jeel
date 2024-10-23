<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;


/**
 * Upload Files
 * @path =>physical path to save files in
 * @image => name of file image in database
 * @realname =>real name file in db
 * @model => $model where to save files in
 * @request => the file input request which holds the file uploading
 */

if (!function_exists('UploadFiles')) {

    function UploadFiles($path, $image, $model, $request)
    {

        $thumbnail = $request;
        $destinationPath = $path;
        $filerealname = $thumbnail->getClientOriginalName();
        $filename = $model->id . time() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move($destinationPath, $filename);

        $model->$image = asset($path) . '/' . $filename;

        $model->save();
    }
}
function generateUniqueNumber($counter)
{

    //static $counter = 0 ; // Static variable to keep track of the counter
    $today = Carbon::today();
    $year = $today->year;
    $month = sprintf("%02d", $today->month); // Add leading zero if month is less than 10
    $day = sprintf("%02d", $today->day); // Add leading zero if day is less than 10

    $formattedDate = $year . '-' . $month . $day;
    // Increment the counter

    $incrementedCounter = str_pad($counter + 1, 4, '0', STR_PAD_LEFT);
    //dd($incrementedCounter);
    //$incrementedCounter++;
    $formattedNumber = $formattedDate . '-' . $incrementedCounter;

    return ['formattedNumber' => $formattedNumber, 'counter' => $counter + 1];
}



function convertToArabicNumerals($number)
{
    $westernArabicNumerals = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $easternArabicNumerals = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];

    return str_replace($westernArabicNumerals, $easternArabicNumerals, $number);
}


