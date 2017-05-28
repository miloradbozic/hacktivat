<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourSegment extends Model
{
    protected $table = 'tour_segment';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function story()
    {
        return $this->hasOne('App\Story', 'id', 'story_id')
            ->orderBy('id', 'asc');
    }
}
