<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Author extends Model
{
    use HasFactory;
    protected $primaryKey = 'Author_Id';

    // public $incrementing = false;
    // protected $primaryKey = 'Author_Id';

    protected $fillable = ['Name', 'Email', 'Author_Url'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         $model->Author_Id = (string) Uuid::generate();
    //     });
    // }
}
