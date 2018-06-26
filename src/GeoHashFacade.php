<?php
namespace Geohash;


use Illuminate\Support\Facades\Facade;

class GeoHashFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geohash';
    }

}