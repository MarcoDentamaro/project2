<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title', 'subtitle', 'body', 'img', 'user_id', 'category_id'
    ];

    //quanti utenti possono scrivere un articolo? Solo UNO!
    public function user(){
        //a quanti utenti può appartenere un articolo? Solo UNO!
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
