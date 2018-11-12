<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Countries;

/**
 * Class CountriesTransformer.
 *
 * @package namespace App\Transformers;
 */
class CountriesTransformer extends TransformerAbstract
{
    /**
     * Transform the Countries entity.
     *
     * @param \App\Models\Countries $model
     *
     * @return array
     */
    public function transform(Countries $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
