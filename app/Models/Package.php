<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'quantity',
        'level',
        'level_name',
        'price',
        'sale_price',
        'features',
        'type_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(PackageCategory::class, 'category_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(PackageType::class, 'type_id', 'id');
    }
}
