<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourSegment extends Model
{
    protected $table = 'tour_segment';

    public function story()
    {
        return $this->hasOne('App\Story', 'id', 'story_id')
            ->orderBy('id', 'asc');
    }
}
