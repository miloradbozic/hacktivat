<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    protected $appends = ['average_rating', 'reviews_count'];

    public $timestamps = false;

    protected $guarded = ['id'];

    public function tourSegments()
    {
        return $this->hasMany('App\TourSegment', 'segment_id', 'id')
            ->orderBy('time', 'asc');
    }

    public function getReviewsCountAttribute()
    {
        return 0;
    }

    public function getAverageRatingAttribute()
    {
        return rand(6,10) / 2;
    }
}
