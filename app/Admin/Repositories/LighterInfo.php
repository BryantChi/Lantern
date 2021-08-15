<?php

namespace App\Admin\Repositories;

use App\Models\LighterInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LighterInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
