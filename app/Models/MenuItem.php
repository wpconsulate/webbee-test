<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public function scopeRoot(Builder $query){
        return $query->where('parent_id',null);
    }

    public function children(){
		return $this->hasMany(MenuItem::class, 'parent_id', 'id' )->with('children');
	}

}
