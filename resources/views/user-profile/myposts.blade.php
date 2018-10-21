@extends('basic-layout')
@section('body')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>My POSTS</h2>
            </div>
            <!-- Basic Example -->
                <div class="row clearfix">
                    @foreach($myposts as $mypost)
                    
                        <div class="card">
                            <div class='header bg-red'>
                                <h2>
                                   {{ $mypost->title }}
                                   <small>@ {{ $mypost->username }}</small>
                                </h2>
                               
                            </div>
                            <div class="body">
                               {{ $mypost->body }}
                            </div>
                        </div>


                                                  

                   @endforeach
                </div>
            </div>
        </div>
    </section>


@stop