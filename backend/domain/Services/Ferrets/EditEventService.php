<?php

namespace Domain\Services\Ferrets;

use Domain\Entities\Event;
use Domain\Repositories\EventRepositoryInterface;

class EditEventService
{
    private $eventRepository;

    /**
    * @param Domain\Repositories\EventRepositoryInterface $eventRepository
    * @return void
    */
    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function exec(string $id, array $attributes): Event
    {
        return $this->eventRepository->update($id, $attributes);
    }
}