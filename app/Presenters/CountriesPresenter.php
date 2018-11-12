<?php

namespace App\Presenters;

use App\Transformers\CountriesTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CountriesPresenter.
 *
 * @package namespace App\Presenters;
 */
class CountriesPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CountriesTransformer();
    }
}
