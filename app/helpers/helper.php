<?php


/*
 * uploading Images
 */

use App\models\BasicsInfo;

function UploadImage($folder, $image){
    $image->store('/',$folder);
    $fileName = $image->hashNAme();
    return  $folder . '/' . $fileName;
}

/*
 * Remove Image from disk if exists
*/
 function RemoveImage($image){
    if($image !== '' && $image !== 'baseInfo\default.png'){
        $path = public_path() . '/style/backend/images/'.$image;
        if(file_exists($path)){
            unlink(public_path() . '/style/backend/images/'.$image );
        }

    }
}

function  DeleteImage($imagePathAfterPublic)
{
    if($imagePathAfterPublic !== '' )
    {
        $path = public_path() . $imagePathAfterPublic;
        if(file_exists($path))
        {
            unlink(public_path() . $imagePathAfterPublic);
        }
        else{
            return $path;
        }

    }
}
function GetBaseInfo()
{
    $base = BasicsInfo::first();
    if(!$base)
    {
        return null;
    }
    return $base;
}
