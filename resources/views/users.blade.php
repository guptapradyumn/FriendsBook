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
                           		
                                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp {{ $img->username }} &nbsp <a href="javascript:void(0);"> <img src="images/like.jpg" width="48" height="48" onclick="showHint(this.name);" name='{{ $img->image_id }}' id="pic" /></a> <span id='like{{ $img->image_id }}'>{{ $img->count }}</span> 
                                    
                                        <img class="img-responsive thumbnail" src="images/xlJ7EhbEX12AFGx4zGXJNqwatK1dxVKRaFIOWLLl.jpeg">

                                    </a>
                                </div>
                                @endforeach
                                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                      <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src="images/image-gallery/2.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                      <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src="images/image-gallery/3.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                   
                                        <img class="img-responsive thumbnail" src="images/image-gallery/4.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/5.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/6.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                    <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/7.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/8.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src="  images/image-gallery/9.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                   
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/10.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                    <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4 
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/11.jpg">
                                  

                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src="  images/image-gallery/12.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                 
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/13.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src="  images/image-gallery/14.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/15.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                   
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/16.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/17.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src="  images/image-gallery/18.jpg">
                                    
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/19.jpg">
                                   
                                </div>
                                <div  class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                     <img src="images/user.png" width="48" height="48" alt="User" /> &nbsp &nbsp Friends Username &nbsp  <img src="images/like.jpg" width="48" height="48" /> 4
                                    
                                        <img class="img-responsive thumbnail" src=" images/image-gallery/20.jpg">
                                   
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