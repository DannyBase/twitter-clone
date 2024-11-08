<?php

namespace App\Http\Controllers\Api\Media;

use App\Media\MimeTypes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaTypesController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => [
                'image' => MimeTypes::$image,
                'video' => MimeTypes::$video,
            ]
        ]);
    }
}
