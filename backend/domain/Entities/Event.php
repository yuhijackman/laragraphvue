<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $attributes = [
      'title' => '',
      'start_date' => '0000-00-00 00:00:00',
      'end_date' => '0000-00-00 00:00:00',
      'location' => ''
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'start_date', 'end_date','location', 'ferret_id'
    ];

    protected $dates = [
      'created_at',
      'updated_at',
      'start_date',
      'end_date'
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ferret(): BelongsTo
    {
        return $this->belongsTo(Ferret::class);
    }

    // public function setStartDateFromAttribute($value)
    // {
    //     $this->attributes['start_date'] = $value;
    // }
    // public function setEndDateFromAttribute($value)
    // {
    //     $this->attributes['end_date'] = $value;
    // }
}
