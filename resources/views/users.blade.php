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
                                DASHBOARD
                            </h2>

                           
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            	 @foreach($images as $img)
                           		
                                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp {{ $img->username }} &nbsp <a href="javascript:void(0);"> <img src="images/like.jpg" width="48" height="48" onclick="showHint(this.name);" name='{{ $img->image_id }}' id="pic" /></a> <span id='like{{ $img->image_id }}'>{{ $img->count }}</span> 
                                    
                                        <img class="img-responsive thumbnail" src="images/xlJ7EhbEX12AFGx4zGXJNqwatK1dxVKRaFIOWLLl.jpeg">

                                    </a>
                                </div>
                                @endforeach
                                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                      <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-2.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                      <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href="images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="images/image-gallery/thumb/thumb-3.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-4.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-5.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-6.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                    <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-7.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-8.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/9.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-9.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/10.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-10.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                    <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4 
                                    <a href=" images/image-gallery/11.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-11.jpg">
                                    </a>

                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-12.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-13.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-14.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-15.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-16.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-17.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/18.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-18.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/19.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-19.jpg">
                                    </a>
                                </div>
                                <div  class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    <a href=" images/image-gallery/20.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/thumb/thumb-20.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

    </section>
<script>

function showHint( z) {
  var xhttp;
  var x=$('#'+'like'+z).text();
  var id =z; 
 
	var count=parseInt(x, 10);
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //alert(this.responseText);
      $('#like'+z).text(this.responseText);
    }
  };
  xhttp.open("GET", "like?q="+id, true);
  xhttp.send();   
}




</script>

@endsection