<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];
//برای دسته بندی اصلی
    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id');
     }
//برای زیر مجموعه دسته بندی در فرم منو
    public function children()
    {
        return $this->hasMany(Category::class,'category_id');
    }
}
