@extends('basic-layout')
@section('body')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Comments</h2>
            </div>
            <!-- Basic Example -->
                <div class="row clearfix">
                    @foreach($comments as $comment)
                        <div class="card">
                            <div class='header bg-cyan'>
                                <h2>
                                  Comment on your post with title  &nbsp <b style="color: red">{{ $comment->title }}</b>
                                   <small>by @ {{ $comment->username }}  </small>
                                </h2>
                               
                            </div>
                            <div class="body">
                               {{ $comment->comment }}
                            </div>
                        </div>
                   @endforeach
                </div>
            </div>
        </div>
    </section>

@stop