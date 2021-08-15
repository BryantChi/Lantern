<?php

namespace App\Admin\Repositories;

use App\Models\AdherentInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AdherentInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
