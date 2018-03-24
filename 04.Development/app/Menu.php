<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table ="tbl_menu";
	   protected $fillable = [
	        'menu_id', 'menu_parent_id', 'title', 'url', 'url2', 'url3',
	   ];
}
