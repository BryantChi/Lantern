<?php

namespace App\Admin\Repositories;

use App\Models\TempleInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TempleInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
