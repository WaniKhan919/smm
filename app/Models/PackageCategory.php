<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function types()
    {
        return $this->hasMany(PackageType::class, 'category_id', 'id');
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'category_id', 'id');
    }
}
