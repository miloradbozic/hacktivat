<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    protected $appends = ['rating'];

    public function tourSegments()
    {
        return $this->hasMany('App\TourSegment', 'segment_id', 'id')
            ->orderBy('time', 'asc');
    }

    public function getRatingAttribute()
    {
        return rand(2,5);
    }
}
