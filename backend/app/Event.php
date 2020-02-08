<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $attributes = [
      'title' => '',
      'start_date' => '0000-00-00 00:00',
      'end_date' => '0000-00-00 00:00',
      'location' => ''
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'start_date', 'end_date','location'
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
