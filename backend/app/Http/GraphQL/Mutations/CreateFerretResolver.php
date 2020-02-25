<?php

namespace App\Http\GraphQL\Mutations;

use App\Models\Ferret;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

use Log;

class CreateFerretResolver
{
    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */

    public function resolve($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {
        $input = $args['input'];
        $ferret = new Ferret;
        $ferret->name = $input['name'];
        $ferret->weight = $input['weight'];
        $ferret->height = $input['height'];
        $ferret->type = $input['type'];
        $ferret->birthdate = $input['birthdate'];
        $ferret->password = $input['password'];
        $ferret->save();
        return $ferret;
     }
}
