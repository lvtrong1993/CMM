<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'tbl_partner';

    protected $primaryKey = 'partner_id';

    public $timestamps = false;
}
