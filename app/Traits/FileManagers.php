<?php

namespace App\Traits;

use Intervention\Image\ImageManager as Image;

trait FileManagers
{
    /**
     * Save image as webp format.
     *
     * @param mixed $image
     * @param string $directory
     * @param float $width
     * @param float $height
     * @return string $imageUrl
     */
    protected function imageUrl(mixed $image, string $directory, $width = false, $height = false): string
    {
        makeDirectory(storage_path($directory));
        $imageName = hexdec(uniqid()) . '.webp';
        $imageUrl = $directory . '/' . $imageName;
        Image::gd()->read($image)->resize($width, $height)->toWebp(100)->save(storage_path($imageUrl));
        return (string)$imageUrl;
    }
}
