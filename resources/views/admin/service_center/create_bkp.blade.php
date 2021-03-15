@extends('admin.layouts.master')

@section('title')
Service Center
@endsection

@section('content')
<br>
<div class="row">
    <br>
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Add Service Center</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-default" href="{{ route('service_center.index') }}" title="Go back"> <i class="fas fa-backward "></i> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> 
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('service_center.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Latitude</strong>
                <input type="float" name="latitude" class="form-control" placeholder="Latitude">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Longitude</strong>
                <input type="float" name="longitude" class="form-control" placeholder="Longitude">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Partner Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Partner Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact No</strong>
                <input type="text" name="phone" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address</strong>
                <textarea class="form-control" style="height:50px" name="address"
                    placeholder="Address"></textarea> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opening hour</strong>
                <input type="time" name="opening_hour" class="form-control" placeholder="Opening hour">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>

</form>
@endsection


@section('scripts')
    
@endsection