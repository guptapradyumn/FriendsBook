<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class commentController extends Controller
{
    //
     public function store_comment(Request $Request)
    {
                $this->validate($Request,[
                    'comment'=>'required'
                                ]);

                
               $comment=$Request->comment;
               $p_id=$Request->p_id;
               
                DB::table('comments')->insert(
                            ['p_id' => $p_id, 'comment' => $comment, 'u_id' => 1,]
                        );


                return redirect()->route('posts');
    }


    public function view_comment(){

        $comments=DB::select('select c_id,comments.p_id,title,comment,username from users,comments,posts where comments.u_id=users.u_id and posts.p_id=comments.p_id and posts.u_id=1 order by c_id desc');

        return view('comments')->with('comments',$comments);
    }
}
