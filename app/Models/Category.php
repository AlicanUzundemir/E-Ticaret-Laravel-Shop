<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','slug','up_id','is_active'];// eklenebilir alanlar
    protected $guarded = [];// eklenemez ve update edilemez alanlar
}
