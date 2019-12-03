<?php

namespace App\UseCases\Country;

use App\Country;

/**
 * Class GetCountriesUseCase.
 */
class GetCountriesUseCase
{
    /**
     * @param Country $country
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Country
     */
    public function handle()
    {
        return Country::all();
    }
}