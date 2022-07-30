<?php

namespace App\Http\Controllers;

interface NodeIdentifierInterface
{
    public function getUniqueNodeId(): string;
}
