<?php

namespace Harvest\Endpoints;

abstract class BaseEndpoint
{
    private $httpClient;

    private $baseUrl;

    private $url;

    abstract public function getPath() : string;

    abstract public function getResponseKey() : string;

    abstract public function getModelClass() : string;

    public function __construct()
    {
        $this->baseUrl = 'https://api.harvestapp.com/api/v2/';
    }

    public function get(int $id = null) : void
    {
        $this->generateUrl($id);
    }

    private function generateUrl($id) : void
    {
        // PROJECTS
        // /projects
        // /projects/{PROJECT_ID}
        //
        // USER ASSIGNMENTS
        // /projects/{PROJECT_ID}/user_assignments
        // /projects/{PROJECT_ID}/user_assignments/{USER_ASSIGNMENT_ID}

        $url = $this->baseUrl;

        if (isset($this->projectId)) {
            $url .= 'projects/' . $this->projectId . '/';
        }

        $url .= $this->getPath();

        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        $this->url = $url;
    }

    public function getUrl() : string
    {
        return $this->url;
    }
}
