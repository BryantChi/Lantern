<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class LighterInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'lighter_infos';
    
}
