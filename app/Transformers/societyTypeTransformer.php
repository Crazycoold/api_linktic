<?php

namespace App\Transformers;

use App\Models\society_type;
use League\Fractal\TransformerAbstract;

class societyTypeTransformer extends TransformerAbstract
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
    public function transform(society_type $society_type)
    {
        return [
            'ST_OID' => (string)$society_type->id,
            'ST_NAM' => (string)$society_type->name,
        ];
    }
}
