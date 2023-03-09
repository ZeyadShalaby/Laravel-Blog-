<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
 
    protected $table= "blogs";
    protected $fillable=[
        "id",
        "is_trending",
        "author",
        "author_image_url",
        "author_image_portrait",
        "author_image_landscape",
        "title",
        "date",
        "description",
        "content",
        "created_at",
        "updated_at"
    ];

    public function tags(){
        return $this->hasMany(BlogsTags:: class);
    }
}

?>