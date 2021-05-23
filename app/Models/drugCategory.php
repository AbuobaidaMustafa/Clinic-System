<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drugCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = "id";
    protected $fillable = ['category_name'];
    public function drugSubCategory()
    {
        return $this->hasMany(drugSubCategory::class);
    }
}
