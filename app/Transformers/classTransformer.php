<?php

namespace App\Transformers;

use App\Models\classes;
use League\Fractal\TransformerAbstract;

class classTransformer extends TransformerAbstract
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
    public function transform(classes $classes)
    {
        return [
            'CL_OID' => (string)$classes->id,
            'CL_NAM' => (string)$classes->name,
        ];
    }
}
