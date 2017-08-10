<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $fillable=['name'];
    //one catgory has many products
    public function products()
    {
//     return $this->hasMany('App\product'); 和下面的一样功能;现在category和product 的关系已经确定了;
     return $this->hasMany(Product::class);
    }
}
