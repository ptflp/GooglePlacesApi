<?php

interface ClientAdaptorInterface
{
    public function setUrl(string $url);

    public function setParamsUrl(array $paramsUrl);

    public function fetch();

    public function getStatusCode();

    public function getResponse();
}