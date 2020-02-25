<?php

namespace Domain\Services\Ferrets;

use Domain\Entities\Event;

use Domain\Repositories\EventRepositoryInterface;
use Domain\Repositories\FerretRepositoryInterface;

class AddEventService
{
    private $eventRepository;
    private $ferretRepository;

    /**
    * @param Domain\Repositories\EventRepositoryInterface $eventRepository
    * @return void
    */
    public function __construct(
        EventRepositoryInterface $eventRepository,
        FerretRepositoryInterface $ferretRepository
    ) {
        $this->eventRepository = $eventRepository;
        $this->ferretRepository = $ferretRepository;
    }

    public function exec(string $id, array $attributes): Event
    {
        $ferret = $this->ferretRepository->getById($id);
        return $this->eventRepository->create($attributes, $ferret);
    }
}