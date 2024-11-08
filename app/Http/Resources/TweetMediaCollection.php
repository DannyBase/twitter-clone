<?php

namespace App\Http\Resources;

use App\Http\Resources\TweetMediaResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TweetMediaCollection extends ResourceCollection
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $collects = TweetMediaResource::class;
    
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }
}
