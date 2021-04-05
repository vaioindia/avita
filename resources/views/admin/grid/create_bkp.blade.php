@extends('admin.layouts.master')

@section('title')
Banner
@endsection

@section('content')
<br>
<br>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Banner</h2>
        </div>
        <div class="pull-right">
            <a class="btn  btn-default" href="{{ route('banners.index') }}">Back</a>
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
   
<form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
            <div class="row">
            <div class=" container-fluid">
                {{-- <div class="col-md-5">
                    <strong>S.No</strong>
                    <input type="text" name="id" class="form-control" placeholder="S.No">
                </div> --}}
                <div class="col-md-12">
                    <strong>Title</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="col-md-12">
                    <strong>URL</strong>
                    <input type="text" name="url" class="form-control" placeholder="URL">
                </div>
                <div class="col-md-12">
                    <strong>Date</strong>
                    <input type="date" name="date" class="form-control" placeholder="Title">
                </div>
                
                <div class="col-md-12">
                    <strong>Sequance</strong>
                    <input type="text" name="seq" class="form-control" placeholder="Sequance">
                </div>
                <!-- {{-- <div class="custom-control custom-switch col-md-5">
                    <strong>Enable</strong>
                    <br>
                    <input type="checkbox" class="custom-control-input" id="switch1" name="enabled">
                    <label class="custom-control-label" for="switch1"></label>
                </div> --}} -->
                <div class="col-md-12">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control" placeholder="Upload">
                </div>

                <div class="col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn  btn-default">Submit</button>
                </div>
            </div>
        </div>
</form>
@endsection