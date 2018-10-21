<?php


namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use app\Images;
use app\Likes;

class imagesController extends Controller
{
    public function user_profile()
    {
     

    	$images=DB::select('select image_name,images.image_id,images.u_id,username,count from images ,users,likes where images.u_id=users.u_id and images.image_id=likes.image_id  and users.u_id<>1 order by images.image_id desc');

      return view('users')->with('images',$images);
    }

    public function like(Request $Request)
    {
    	$id=$Request->input('q');
        
    	$count=DB::select('select count from likes where image_id='.$id);
    	
    	$num=$count[0]->count + 1;
        
      // DB::update('update likes set count='.$num.'where image_id='.$id);
    	DB::table('likes')
            ->where('image_id', $id)
            ->update(['count' => $num]);

    	return $num;
    }

     public function store_image(Request $Request)
    {
                $this->validate($Request,[
                    'image'=>'required',
                                ]);


                if($Request->hasFile('image')){
                    
                    $filename=$Request->image->store('pictures');
                    DB::table('images')->insert(
                            ['image_name' => $filename, 'u_id' => 1]
                        );
                    $new=DB::select('SELECT LAST_INSERT_ID() as latest');
                    $index=$new[0]->latest;
                     DB::table('likes')->insert(
                            ['image_id' => $index]
                        );

                    return  redirect()->route('home');
                }

           
    }


     public function view_myphotos()
    {
     

        $myimages=DB::select('select image_name,images.image_id,images.u_id,username,count from images ,users,likes where images.u_id=users.u_id and images.image_id=likes.image_id and users.u_id=1 order by images.image_id desc');

      return view('user-profile/myphotos')->with('myimages',$myimages);
    }

     public function view_friendlist()
    {
     

        $friendlist=DB::select("select first_name,last_name,email,username from users,friends  where users.u_id=case 
                                when friends.from_u_id=1 then friends.to_u_id
                                when friends.to_u_id=1 then friends.from_u_id
                                end ");

        
      return view('user-profile/friendlist')->with('friendlist',$friendlist);
    }



     public function view_myprofile()
    {
     

        $profile=DB::select("select first_name,middle_name,last_name,email,username,password from users where users.u_id=1");
        
        
      return view('user-profile/profile')->with('profile',$profile[0]);
    }


}
