<?php
namespace Project\Models;

use Project\Database\Model;

class Post extends Model
{
    public $table = 'posts';

    public $dates = ['created'];
}