<?php

namespace Domain\Services\Ferrets;

use Domain\Entities\Ferret;
use Domain\Repositories\FerretRepositoryInterface;

class DeleteService
{
    private $ferretRepository;

    /**
     * @param Domain\Repositories\FerretRepositoryInterface $ferretRepository
    * @return void
    */
    public function __construct(FerretRepositoryInterface $ferretRepository) {
        $this->ferretRepository = $ferretRepository;
    }

    public function exec(string $id): Ferret
    {
        return $this->ferretRepository->delete($id);
    }
}