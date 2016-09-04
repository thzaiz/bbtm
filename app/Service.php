<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = (['service_name', 'link', 'image', 'sort_order', 'deleted', 'sub_menu_id']);

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class);
    }


}
