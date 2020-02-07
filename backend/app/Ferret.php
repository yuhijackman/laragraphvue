<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ferret extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birthdate', 'password','thumbnail','weight','type'
    ];

    public static $enums = [
        'type' => [
            1 => 'HOLDEN',
            2 => 'MARSHAL'
        ]
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function foodRecords(): HasMany
    {
        return $this->hasMany(FoodRecord::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function foods(): HasMany
    {
        return $this->hasMany(Food::class);
    }
}
