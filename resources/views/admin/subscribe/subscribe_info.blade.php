@extends('admin.layouts.app')


@section('content')

    <div class="container">
    <br>
    <br>
    <br>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
      <h2 class="">Newsletter </h2>
      
      <form  method="post" action="{{ url('subscribe') }}" enctype="multipart/form-data">
      @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
          </div>
  
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberToken"  {{ old('rememberToken') ? 'checked' : '' }}>
            <label for="exampleCheck1">&nbsp;subscribe</label>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    @endsection