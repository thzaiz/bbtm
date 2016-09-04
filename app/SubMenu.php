<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{

    protected $fillable = (['sub_menu_name', 'link', 'image', 'sort_order', 'deleted']);

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu()
    {

        return $this->belongsTo(Menu::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
