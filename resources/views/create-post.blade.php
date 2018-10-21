@extends('basic-layout')
@section('body')

    <section class="content">
        <div class="container-fluid">
           

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Create New Post
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form method="POST" action="storepost">
                                <label for="email_address">Title</label>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="title" class="form-control" placeholder="Enter your post title">
                                    </div>
                                </div>
                                <label for="password">Posts</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="body" class="form-control" placeholder="Enter your thoughts">
                                    </div>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPLOAD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            
        </div>
    </section>

   @endsection