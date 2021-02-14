<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;



class Items extends Model
{
    // use HasFactory;

    protected $table = "items";
    protected $fillable = ["file_name", "file_path","file_size","item_title","price","item_explanation","item_state","school_name","shipping","from_where"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function chat()
    {
        return $this->hasMany(Message::class);
    }
}

