<?php

namespace App\Transformers;

use App\Models\nationality;
use League\Fractal\TransformerAbstract;

class nationalityTransformer extends TransformerAbstract
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
    public function transform(nationality $nationality)
    {
        return [
            'NA_OID' => (string)$nationality->id,
            'NA_COD' => (string)$nationality->cod,
            'NA_NAM' => (string)$nationality->name,
            'NA_NAT' => (string)$nationality->nationality,
        ];
    }
}
