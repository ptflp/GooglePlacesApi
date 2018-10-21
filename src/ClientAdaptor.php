<?php

class ClientAdaptor implements ClientAdaptorInterface
{
    public $url;

    public $paramsUrl=[];

    protected $response;

    protected $statusCode;

    protected $client;

    public function __construct(GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }

    public function setParamsUrl(array $paramsUrl)
    {
        $this->paramsUrl = $paramsUrl;

        return $this;
    }

    public function fetch()
    {
        $res = $this->client->request('GET', $this->url, [
			'query' => $this->paramsUrl
        ]);

        $this->statusCode = $res->getStatusCode();

        $this->response = $res->getBody();

        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getResponse()
    {
        return $this->response;
    }
}