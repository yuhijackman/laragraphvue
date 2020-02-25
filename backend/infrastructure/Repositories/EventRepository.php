<?php
namespace Infrastructure\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

use Domain\Entities\Event;
use Domain\Entities\Ferret;

use Domain\Repositories\EventRepositoryInterface;

use Carbon\Carbon;

class EventRepository implements EventRepositoryInterface
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function create(array $attributes, Ferret $ferret): Event
    {
        $event = new $this->event;
        $event->title = $attributes['title'];
        $event->location = $attributes['location'];
        $event->start_date = $attributes['start_date'];
        $event->end_date = $attributes['end_date'];
        $event->ferret_id = $ferret->id;
        $event->save();
        return $event;
    }

    public function update(string $id, array $attributes): Event
    {
        $event = $this->event->findOrFail($id);
        $event->fill($attributes);
        $event->save();
        return $event;
    }
}