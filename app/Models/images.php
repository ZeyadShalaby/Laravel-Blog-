<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table ="images";
    protected $fillable = [
        "id",
        "name",
        "location",
        "created_at",
        "updated_at"
    ];
}

?>