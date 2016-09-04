<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = (['menu_name', 'link', 'image', 'sort_order', 'deleted', 'menu_type']);

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subMenu()
    {



    
       return $this->hasMany(SubMenu::class)->orderBy('sort_order', 'asc');
    }
}
