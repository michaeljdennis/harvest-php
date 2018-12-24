<?php

namespace Harvest\Endpoints;

use Harvest\Models\Contact;

class Contacts extends BaseEndpoint
{
    public function getPath(): string
    {
        return 'contacts';
    }

    public function getResponseKey(): string
    {
        return 'contacts';
    }

    public function getModelClass(): string
    {
        return Contact::class;
    }
}
