<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poop extends Model
{
    protected $attributes = [
        'consistency' => 0,
        'color' => 0,
        'date' => '0000-00-00'
    ];

    public static $enums = [
        'consistency' => [
            1 => 'SEEDY',
            2 => 'GELATINOUS',
            3 => 'WATERY',
            4 => 'SOFT',
            5 => 'TUBULAR'
        ],
        'color' => [
            1 => 'BROWN',
            2 => 'GREEN',
            3 => 'YELLOW',
            4 => 'TARRY',
            5 => 'BLOODY'
        ]
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'color', 'consistency', 'date'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ferret(): BelongsTo
    {
        return $this->belongsTo(Ferret::class);
    }
}
