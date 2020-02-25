<?php
namespace Domain\Repositories;

use Illuminate\Support\Collection;

use Domain\Repositories\RepositoryInterface;
use Domain\Entities\Ferret;

interface FerretRepositoryInterface extends RepositoryInterface
{
    public function create(array $attribute): Ferret;
    public function update(string $id, array $attribute): Ferret;
    public function delete(string $id): Ferret;
    public function getById(string $id): Ferret;
}
