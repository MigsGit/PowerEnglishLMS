<?php

namespace App\Interfaces;

interface ResourceInterface
{
        /**
     * Create a interface
     *
     * @return void
     */
    public function create($model,array $data);
}