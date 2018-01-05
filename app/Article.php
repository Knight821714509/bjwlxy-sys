<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $table = 'document';
    protected $primaryKey = 'id';
    public $timestamps = false;
}