<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class postController extends Controller
{
    //


     public function store_post(Request $Request)
    {
                $this->validate($Request,[
                    'title'=>'required',
                    'body'=>'required'
                                ]);

                
               $title=$Request->title;
               $body=$Request->body;
                DB::table('posts')->insert(
                            ['title' => $title, 'body' => $body, 'u_id' => 1,]
                        );


                return redirect()->route('home');
    }

    public function view_post(){

    	$color=Array('red','cyan','green','blue','orange','yellow','pink');
    	
    	$posts=DB::select('select p_id,title,body,posts.u_id,username from users,posts where posts.u_id=users.u_id and users.u_id<>1 order by p_id desc');

        return view('posts')->with('posts',$posts)->with('color',$color);

    }


     public function view_mypost(){

               
        $myposts=DB::select('select p_id,title,body,posts.u_id,username from users,posts where posts.u_id=users.u_id and users.u_id=1 order by p_id desc');

        return view('user-profile/myposts')->with('myposts',$myposts);

    }





}
