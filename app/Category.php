<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    protected $table = "category";
    protected $fillable = ['content','title'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
