<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    protected $fillable = ["body"];

    public function chat_place()
    {
        return $this->belongsTo(Items::class);
    }


    
}
