<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = (['product_name', 'link', 'image', 'sort_order', 'deleted', 'sub_menu_id']);
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class);
    }
    
}
