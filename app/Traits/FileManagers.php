<?php

namespace App\Traits;

use Intervention\Image\ImageManager as Image;

trait FileManagers
{
    protected function imageUrl($image, $directory, $width = false, $height = false): string
    {
        makeDirectory(storage_path($directory));
        $imageName = hexdec(uniqid()) . '.webp';
        $imageUrl = $directory . '/' . $imageName;
        Image::gd()->read($image)->resize($width, $height)->toWebp(100)->save(storage_path($imageUrl));
        return (string)$imageUrl;
    }
}
