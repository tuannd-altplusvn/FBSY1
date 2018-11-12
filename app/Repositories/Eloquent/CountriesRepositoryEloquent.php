<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\CountriesRepository;
use App\Models\Countries;
use App\Validators\CountriesValidator;

/**
 * Class CountriesRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class CountriesRepositoryEloquent extends BaseRepository implements CountriesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Countries::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CountriesValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
