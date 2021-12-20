<?php

namespace App\Repositories\Impl;

use App\Repositories\Impl;

interface NoteRepositoryInterface extends BaseRepositoryInterface
{
    public function create($data);
}
