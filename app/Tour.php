<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    public function tourSegments()
    {
        return $this->hasMany('App\TourSegment', 'segment_id', 'id')
            ->orderBy('time', 'asc');
    }
}
