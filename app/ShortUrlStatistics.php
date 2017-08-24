<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShortUrl;

class ShortUrlStatistics extends Model
{
    protected $guarded = [];

    public function shortUrl(){
        return $this->belongsTo(ShortUrl::class);
    }
}
