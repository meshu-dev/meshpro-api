<?php

namespace App\Actions\Cv\Pdf;

use Illuminate\Support\Facades\Storage;

class GetPdfFileUrlAction
{
    /**
     * @return string|null
     */
    public function execute(): string|null
    {
        $file = resolve(GetPdfFileAction::class)->execute();

        return $file ? Storage::disk('s3')->url($file->url) : null;
    }
}
