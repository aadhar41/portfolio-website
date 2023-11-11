<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'category',
        'description',
    ];

    public function getCategory() {
        return $this->belongsTo(BlogCategory::class, 'category', 'id');
    }
}
