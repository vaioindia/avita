@extends('admin.layouts.master')

@section('title')
New And Event
@endsection

@section('content')
<br>
<br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit News</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('whatnew.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('whatnew.update',$whatnew->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="name" value="{{ $whatnew->title }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date</strong>
                    <input type="date" name="published_at" value="{{ $whatnew->published_at }}" class="form-control" placeholder="Date">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>URL</strong>
                    <input type="text" name="url" class="form-control" placeholder="URL" value="{{ $whatnew->url }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="">
                <strong>Image</strong>
                <img src="{{ url('/'.$whatnew->image) }}" class="img-thumbnail" width="100">
                <input type="file" name="image" class="form-control" placeholder="Upload" value="{{ $whatnew->image }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
   
    </form>
@endsection