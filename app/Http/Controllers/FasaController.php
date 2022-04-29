<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasaController extends Controller
{


    public function topPage(Request $request)
    {
        $recentPost = '[
            {
                "postDate":"2022年2月8日投稿",
                "postTitle":"園児同士の歩み寄り",
                "postDesc":"いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。",
                "like":23,
                "comment":23,
                "author": "current"
            },
            {
                "postDate":"2022年2月8日投稿",
                "postTitle":"園児同士の歩み寄り",
                "postDesc":"いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。",
                "like":23,
                "comment":23,
                "author": "current"
            },
            {
                "postDate":"2022年2月8日投稿",
                "postTitle":"園児同士の歩み寄り",
                "postDesc":"いつもケンカばかりしていた、たかし君とひさし君が仲良く遊んでいました。タカシ君から歩み寄った形で、二人でおもちゃを共有して遊びながら楽しそうに会話をしていました。仲良しであることの楽しさを後押しする形で「仲良く遊ぶのは楽しいね」とさりげなく二人に話しました。",
                "like":23,
                "comment":23,
                "author": "current"
            }
        ]';
        return view("pages.top")->with("recentPost", json_decode($recentPost, true));
    }
}
