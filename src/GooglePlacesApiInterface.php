<?php

interface GooglePlacesApiInterface
{
    public function getCitiesByName(string $name);

    public function getPlacesByName(string $name);

    public function getPlacesByCity(string $city, string $place);

    public function getAdressByCity(string $city, string $address);

    public function getDetails(string $fields);

    public function getPlaceDetailsById(string $placeId, string $fields);

    public function getOne();

    public function getResults();

    public function setApiKey(string $key);

    public function setLanguage(string $lang);

    public function setRadius(int $radius);
}