<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    // protected $fillable =['judul', 'penerbit', 'category_id', 'slug', 'description'];

    protected $guarded = ['id'];

    public function category() {
        return  $this->belongsTo(Category::class);
    }
}
