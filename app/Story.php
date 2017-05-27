<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';

    protected $appends = ['average_rating'];

    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;
    const STATUS_DECLINED = 2;

    public function getAverageRatingAttribute()
    {
        return rand(6,10) / 2;
    }
}
