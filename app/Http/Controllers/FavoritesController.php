<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション
     * 
     * @param $id 投稿のid
     * @return \Illuminate\Http\Responce
     */
    public function store($id)
    {
        //認証済みユーザ(閲覧者)が、idの投稿をお気に入りする
        \Auth::user()->favorite($id);
        
        //前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * 投稿をお気に入り解除するアクション
     * 
     * @param $id 投稿のid
     * @return \Illuminate\Http\Responce
     */
    public function destroy($id)
    {
        // 認証済みユーザ(閲覧者)が、idの投稿をお気に入り削除する
        \Auth::user()->unfavorite($id);
        
        //前のURLへリダイレクトさせる
        return back();
    }
}
