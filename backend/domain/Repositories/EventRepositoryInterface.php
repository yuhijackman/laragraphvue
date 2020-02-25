<?php
namespace Domain\Repositories;

use Illuminate\Support\Collection;

use Domain\Repositories\RepositoryInterface;

use Domain\Entities\Event;
use Domain\Entities\Ferret;

interface EventRepositoryInterface extends RepositoryInterface
{
    public function create(array $attribute, Ferret $ferret): Event;
    public function update(string $id, array $attribute): Event;
}