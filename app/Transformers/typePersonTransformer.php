<?php

namespace App\Transformers;

use App\Models\type_person;
use League\Fractal\TransformerAbstract;

class typePersonTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(type_person $type_person)
    {
        return [
            'TP_OID' => (string)$type_person->id,
            'TP_NAM' => (string)$type_person->name,
        ];
    }
}
