<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AdherentInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'adherent_infos';
    
}
