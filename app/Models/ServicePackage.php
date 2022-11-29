<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
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
        'keyword',
        'speed_box',
        'features',
        'service_id',
        'service_package_category_id',
    ];
    
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    
    public function category()
    {
        return $this->belongsTo(ServicePackageCategory::class, 'service_package_category_id', 'id');
    }

}
