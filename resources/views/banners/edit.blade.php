@extends('layouts.master')

@section('title')
Banner
@endsection


@section('content')
<br>
<br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('banners.index') }}">Back</a>
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
  
    <form action="{{ route('banners.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>S.No</strong>
                    <input type="text" name="name" value="{{ $banner->id }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" class="form-control"  name="title" value="{{ $banner->title }}" placeholder="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Url</strong>
                    <input type="text" class="form-control"  name="url" value="{{ $banner->url }}" placeholder="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date</strong>
                    <input type="date" class="form-control"  name="date" value="{{ $banner->date }}" placeholder="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sequance</strong>
                    <input type="text" class="form-control"  name="seq" value="{{ $banner->seq }}" placeholder="title">
                </div>
            </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Images</strong>
                        <br>
                        <br>

                        @if ("/images/{{ $banner->image }}")
                            <img src="{{ asset('imges/' . $banner->image) }}" height="100" width="100">
                            <img src="{{ $banner->image }}">
                        @else
                                <p>No image found</p>
                        @endif
                        <input type="file" name="image" value="{{ $banner->image }}">
                        <button type="submit" class="btn btn-">Upload</button>
                    </div>
                </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <strong>Image</strong>
                        <input type="file" name="image" class="form-control" placeholder="" value="{{ $banner->image }}">
                    </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
@endsection