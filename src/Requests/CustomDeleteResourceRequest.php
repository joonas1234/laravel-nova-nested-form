<?php

namespace Joonas1234\NestedForm\Requests;

use Laravel\Nova\Http\Requests\DeleteResourceRequest;

class CustomDeleteResourceRequest extends DeleteResourceRequest
{
    protected $customResource = null;

    public function setCustomResource($customResourceClass)
    {
        $this->customResource = $customResourceClass;
    }

    public function resource()
    {
        return $this->customResource;
    }
}
