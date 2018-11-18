<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InforDriving extends Model
{
	protected $fillable = [
        'infor_drivings_title',
        'infor_drivings_discription',
        'infor_drivings_image',
        'infor_drivings_content'
    ];
    	
}
