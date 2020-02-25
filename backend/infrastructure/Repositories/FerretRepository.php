<?php
namespace Infrastructure\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

use Domain\Entities\Ferret;

use Domain\Repositories\FerretRepositoryInterface;

use Carbon\Carbon;

class FerretRepository implements FerretRepositoryInterface
{
    protected $event;

    public function __construct(Ferret $ferret)
    {
        $this->ferret = $ferret;
    }

    public function create(array $attributes): Ferret
    {
        $ferret = new $this->ferret;
        $ferret->fill($attributes);
        $ferret->save();
        return $ferret;
    }

    public function update(string $id, array $attributes): Ferret
    {
        $ferret = $this->ferret->findOrFail($id);
        $ferret->fill($attributes);
        $ferret->save();
        return $ferret;
    }

    public function delete(string $id): Ferret
    {
        $ferret = $this->ferret->findOrFail($id);
        $ferret->delete();
        return $ferret;
    }

    public function getById(string $id): Ferret
    {
        return $this->ferret->find($id);
    }
}