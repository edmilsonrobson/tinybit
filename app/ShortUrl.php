<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $guarded = [];

    public function shortUrlStatistics(){
        return $this->hasOne(ShortUrlStatistics::class);
    }
}
