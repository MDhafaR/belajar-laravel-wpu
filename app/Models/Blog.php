<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // fillable itu untuk column apa saja yang wajib terisi
    // protected $fillable = [
    //     'title',
    //     'author',
    //     'mini_body',
    //     'body',
    // ];

    // guarded itu untuk column apa saja yang tidak boleh diisi

    protected $guarded = ['id'];

    function category() {
        return $this->belongsTo(category::class);
    }

    function user() {
        return $this->belongsTo(User::class);
    }
}
