<?php

namespace Harvest\Endpoints;

abstract class BaseEndpoint
{
    protected $baseUrl;

    protected $url;

    protected $fromPath;

    protected $fromId;

    abstract public function getPath(): string;

    abstract public function getResponseKey(): string;

    abstract public function getModelClass(): string;

    public function __construct()
    {
        $this->baseUrl = 'https://api.harvestapp.com/api/v2/';
        $this->url = '';
    }

    public function get(int $id = null): void
    {
        $this->generateUrl($id);
    }

    private function generateUrl($id): void
    {
        $url = $this->baseUrl;

        if (!is_null($this->fromPath) && !is_null($this->fromId)) {
            $url .= $this->fromPath.'/'.$this->fromId.'/';
        }

        $url .= $this->getPath();

        if (!is_null($id)) {
            $url .= '/'.$id;
        }

        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
