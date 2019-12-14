<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\Country\GetCountriesUseCase;
use App\Http\Resources\CountriesResourceCollection;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetCountriesUseCase $useCase)
    {
        $countries = $useCase->handle();

        return new CountriesResourceCollection($countries);
    }
}
