<?php

namespace App\Actions\File;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GetFileUrlAction
{
    /**
     * @return string
     */
    public function execute(File $file): string
    {
        if (Str::isUrl($file->url, ['http', 'https'])) {
            return $file->url;
        }
        return Storage::disk('s3')->url($file->url);
    }
}
