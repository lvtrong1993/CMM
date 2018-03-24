<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table ="tbl_item";
	   protected $fillable = [
	        'item_id', 'item_parent_id', 'item_name', 'image', 'item_type','	warranty_date', 'description', 'note_id', 'partner_id','price',
	   ];
}
