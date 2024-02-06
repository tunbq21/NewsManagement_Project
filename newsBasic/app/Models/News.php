<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';

    protected $fillable = ['Title', 'Content','News_Url','Img_Id' ,'Author_Id'];
}
