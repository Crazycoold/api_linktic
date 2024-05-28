<?php

namespace App\Transformers;

use App\Models\document_type;
use League\Fractal\TransformerAbstract;

class documentTypeTransformer extends TransformerAbstract
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
    public function transform(document_type $document_type)
    {
        return [
            'DT_OID' => (string)$document_type->id,
            'DT_NAM' => (string)$document_type->name,
        ];
    }
}
