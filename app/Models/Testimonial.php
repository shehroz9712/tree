<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public function getAvgRatingAttribute()
    {
        $reviews = $this->reviews()->get();
        $count = $reviews->count();

        if ($count === 0) {
            return 0; // Handle case where there are no reviews
        }

        $totalRating = $reviews->sum('rating');
        $avgRating = $totalRating / $count;

        return round($avgRating, 1); // Return average rating rounded to one decimal place
    }
}
