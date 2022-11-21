<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'title',
        'description',
    ];

    public function categories()
    {
        return $this->hasMany(ServiceCategory::class, 'service_id', 'id');
    }

    public function packages()
    {
        return $this->hasMany(ServicePackage::class, 'service_id', 'id');
    }
}
