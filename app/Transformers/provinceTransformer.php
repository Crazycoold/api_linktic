<?php

namespace App\Transformers;

use App\Models\province;
use League\Fractal\TransformerAbstract;

class provinceTransformer extends TransformerAbstract
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
    public function transform(province $province)
    {
        return [
            'PR_OID' => (string)$province->id,
            'PR_NAM' => (string)$province->name,
        ];
    }
}
