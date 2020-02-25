<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;
use Log;

class Ferret extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'name' => '',
        'birthdate' => '0000-00-00',
        'thumbnail' => '',
        'weight' => 0,
        'height' => 0,
        'type' => 0
    ];

    public static $enums = [
        'type' => [
            0 => 'UNKNOWN',
            1 => 'HOLDEN',
            2 => 'MARSHAL'
        ]
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birthdate', 'password','thumbnail','weight','type'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'birthdate'
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
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function foods(): HasMany
    {
        return $this->hasMany(Food::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function poops(): HasMany
    {
        return $this->hasMany(Poop::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function medications(): HasMany
    {
        return $this->hasMany(Medication::class);
    }
}
