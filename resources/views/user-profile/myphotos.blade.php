@extends('basic-layout')
@section('body')

 <section class="content">
       

 <div class="container-fluid">
            <!-- Image Gallery -->
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                My Photos
                            </h2>

                           
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            	 @foreach($myimages as $myimg)
                           		
                                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp {{ $myimg->username }} &nbsp  <img src="images/like.jpg" width="48" height="48" />   <span >{{ $myimg->count }}</span> 
                                  
                                        <img class="img-responsive thumbnail" src="images/xlJ7EhbEX12AFGx4zGXJNqwatK1dxVKRaFIOWLLl.jpeg">

                                    </a>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

    </section>


@stop