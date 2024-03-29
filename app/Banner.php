<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    public function insertProduct($data)
    {
        return Banner::insert($data);
    }

    public function updateProduct($id, $data)
    {
        return Product::where('id', '=', $id)->update($data);
    }

    public function getProductById($id)
    {
        return Product::where('id', '=', $id)->first();
    }
    public function getProductBySlug($slug)
    {
        return Product::where('slug', '=', $slug)->first();
    }
    public function getProductByTypeSlug($type, $slug)
    {
        return Product::where('slug', '=', $slug)->where('type', '=', $type)->first();
    }

    public function getListProduct()
    {
        return Banner::orderBy('created_at', 'desc')->get();
    }

    public function getList()
    {
        return Banner::orderBy('created_at', 'desc')->get();
    }

    public function getList5Product()
    {
        return Product::orderBy('pos', 'asc')->orderBy('created_at', 'desc')->take(5)->get();
    }

    public function getListProductByType($type)
    {
        return Product::where('type', '=', $type)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->get();
    }
    public function getListProductByTypeRelate($type, $slug)
    {
        return Product::where('type', '=', $type)->where('slug', '!=', $slug)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->limit(8)->get();
    }
    public function getListProductLimit($type, $limit)
    {
        return Product::where('type', '=', $type)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->limit($limit)->get();
    }
    public function getListProductLimitOffset($type, $limit, $offset)
    {
        return Product::where('type', '=', $type)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->offset($offset)->limit($limit)->get();
    }
    public function deleteProduct($id)
    {
        return Banner::where('id', '=', $id)->delete();
    }
    public function countProductByType($type)
    {
        return Product::where('type', '=', $type)->count();
    }
    public function getListProductById($arrId)
    {
        return Product::whereIn('id', $arrId)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->get();
    }
}