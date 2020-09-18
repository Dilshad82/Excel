<?php

namespace App\Exports;

use App\Post;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

//class PostsExport implements FromCollection
//{
//    /**
//    * @return \Illuminate\Support\Collection
//    */
//    public function collection()
//    {
//        return Post::all();
//    }
//}

class PostsExport implements FromView
{
    public function view(): View
    {
        return view('posts-excel', [
            'posts' => Post::all()
        ]);
    }
}
