<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMovDetails extends Model
{
    protected $guarded = [];

	public function Category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }
	public function Product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }
}
