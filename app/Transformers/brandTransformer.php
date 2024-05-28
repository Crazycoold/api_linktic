<?php

namespace App\Transformers;

use App\Models\brand;
use League\Fractal\TransformerAbstract;

class brandTransformer extends TransformerAbstract
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
    public function transform(brand $brand)
    {
        return [
            'BR_OID' => (string)$brand->id,
            'BR_NAM' => (string)$brand->name,
        ];
    }
}
