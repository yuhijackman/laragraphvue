<?php

namespace App\Http\GraphQL;

use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use GraphQL\Type\Definition\ResolveInfo;

class EventGQL {

    public function createEventResolver($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo) {
        $input = $args['input'];
        $id = $args['ferret_id'];
        $service = resolve('Domain\Services\Ferrets\AddEventService');
        return $service->exec($id, $input);
    }

    public function updateEventResolver($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo) {
      $id = $args['id'];
      $input = $args['input'];
      $service = resolve('Domain\Services\Ferrets\EditEventService');
      return $service->exec($id, $input);
    }

}