<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function insertNews($data)
    {
        return News::insert($data);
    }

    public function updateNews($id, $data)
    {
        return News::where('id', '=', $id)->update($data);
    }

    public function getNewsById($id)
    {
        return News::where('id', '=', $id)->first();
    }

    public function getIntro()
    {
        return News::where('type', '!=', null)->first();
    }

    public function getNewsBySlug($slug)
    {
        return News::where('slug', '=', $slug)->first();
    }
    public function getListNews()
    {
        return News::where('type', null)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->get();
    }
    public function getList3NewestNews()
    {
        return News::orderBy('pos', 'asc')->orderBy('created_at', 'desc')->take(3)->get();
    }

    public function getList5NewestNews()
    {
        return News::where('type', null)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->take(4)->get();
    }

    public function deleteNews($id)
    {
        return News::where('id', '=', $id)->delete();
    }
    public function getListNewsRelate($slug)
    {
        return News::where('slug', '!=', $slug)->orderBy('pos', 'asc')->orderBy('created_at', 'desc')->limit(8)->get();
    }
}