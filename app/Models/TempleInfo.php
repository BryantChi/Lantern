<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class TempleInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'temple_infos';

    protected $casts = [
        'temple_other_photo' => 'json',
    ];

}
