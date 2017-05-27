<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';

    protected $appends = ['average_rating', 'reviews_count'];

    protected $guarded = ['id'];

    public $timestamps = false;

    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;
    const STATUS_DECLINED = 2;

    public function getAverageRatingAttribute()
    {
        return rand(6,10) / 2;
    }

    public function getReviewsCountAttribute()
    {
        return 0;
    }

    public function author()
    {
        return $this->hasOne('App\User', 'id', 'author_id')
            ->orderBy('id', 'asc');
    }
}
