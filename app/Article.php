<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $table = 'document';
    protected $primaryKey = 'id';
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
}