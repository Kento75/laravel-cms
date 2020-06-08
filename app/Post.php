<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'published_at'
    ];

    /**
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}
