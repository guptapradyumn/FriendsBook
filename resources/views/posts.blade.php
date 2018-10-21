@extends('basic-layout')
@section('body')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>POSTS</h2>
            </div>
            <!-- Basic Example -->
                <div class="row clearfix">
                    @foreach($posts as $post)
                     <?php 

                                   $k = array_rand($color);
                                   $new_color=$color[$k];

                                   ?>
                        <div class="card">
                            <div class='header bg-{{ $new_color }}'>
                                <h2>
                                   {{ $post->title }}
                                   <small>@ {{ $post->username }}</small>
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target='#myModal{{ $post->p_id }}'>
                                            <i class="material-icons">comment</i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                               {{ $post->body }}
                            </div>
                        </div>


                         <div class="modal fade" id='myModal{{ $post->p_id }}'' role="dialog">
                            <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Comment Here</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="storecomment">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <input name="p_id" type="hidden" value='{{ $post->p_id }}'>
                                       <input type="text" name="comment" class="form-control" placeholder="Enter your comment">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-default" >Send</button>
                                    </div>
                                </form>
                                 </div>
                                  
                             </div>
                         </div>
                              
                           

                   @endforeach
                </div>
            </div>
        </div>
    </section>

    @endsection
