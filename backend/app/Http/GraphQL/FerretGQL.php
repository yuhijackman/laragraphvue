<?php

namespace App\Http\GraphQL;

use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use GraphQL\Type\Definition\ResolveInfo;

class FerretGQL {

    public function createFerretResolver($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo) {
        $input = $args['input'];
        $service = resolve('Domain\Services\Ferrets\SignUpService');
        return $service->exec($input);
    }

    public function updateFerretResolver($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $input = $args['input'];
        $id = $args['id'];
        $service = resolve('Domain\Services\Ferrets\EditService');
        return $service->exec($id, $input);
    }

    public function deleteFerretResolver($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $id = $args['id'];
        $service = resolve('Domain\Services\Ferrets\DeleteService');
        return $service->exec($id);
    }
}