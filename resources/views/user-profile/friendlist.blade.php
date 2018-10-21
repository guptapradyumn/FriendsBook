
@extends('basic-layout')
@section('body')
<section class="content">
  <?php
  $count=1;
  ?>
       

 <div class="container-fluid">
                        
            <div class="row">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    @foreach($friendlist as $fl)
    <tr>
      <th scope="row">{{ $count++ }}</th>
      <td>{{ $fl->first_name }} &nbsp {{ $fl->last_name }}</td>
      <td>{{ $fl->email }}</td>
      <td><a href="javascript:void(0)">{{ $fl->username }}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
</div>
</section>

@stop