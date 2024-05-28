<?php

namespace App\Transformers;

use App\Models\city;
use League\Fractal\TransformerAbstract;

class cityTransformer extends TransformerAbstract
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
    public function transform(city $city)
    {
        return [
            'CT_OID' => (string)$city->id,
            'CT_PRV' => (string)$city->id_provincia,
            'CT_NAM' => (string)$city->name,
            'CT_COD' => (string)$city->cod_city,
        ];
    }
}
