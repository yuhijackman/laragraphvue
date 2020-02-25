<?php

namespace Domain\Services\Ferrets;

use Domain\Entities\Ferret;
use Domain\Repositories\FerretRepositoryInterface;

class SignUpService
{
    private $ferretRepository;

    /**
     * @param Domain\Repositories\FerretRepositoryInterface $ferretRepository
    * @return void
    */
    public function __construct(FerretRepositoryInterface $ferretRepository) {
        $this->ferretRepository = $ferretRepository;
    }

    public function exec(array $attributes): Ferret
    {
        return $this->ferretRepository->create($attributes);
    }
}