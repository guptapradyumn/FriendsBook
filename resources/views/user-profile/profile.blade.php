@extends('basic-layout')
@section('body')

<section class="content">
        <div class="container-fluid">
Name : {{ $profile->first_name }} &nbsp {{ $profile->middle_name }} &nbsp {{ $profile->last_name }}<br>

Email :{{ $profile->email }}<br>
Username :{{ $profile->username }}<br>
Password :{{ $profile->password }}
</div>
</section>

@stop