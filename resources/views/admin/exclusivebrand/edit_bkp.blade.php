@extends('admin.layouts.master')

@section('title')
Retail Partner
@endsection

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Brand Partner</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('exclusivebrand.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-info">
        <strong>Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li></li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('exclusivebrand.update', $exclusivebrand->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Latitude</strong>
                <input type="float" name="latitude" value="{{ $exclusivebrand->latitude}}" class="form-control" placeholder="Latitude">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Longitude</strong>
                <input type="float" value="{{ $exclusivebrand->longitude }}" name="longitude" class="form-control" placeholder="Longitude">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Partner Name</strong>
                <input type="text" value="{{ $exclusivebrand->name }}" name="name" class="form-control" placeholder="Partner Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" value="{{ $exclusivebrand->email }}" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact No</strong>
                <input type="number" value="{{ $exclusivebrand->phone }}" class="form-control" name="phone" placeholder="Contact No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address</strong>
                <input type="text" value="{{ $exclusivebrand->address }}" class="form-control" name="address" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opening hour</strong>
                <input type="time" value="{{ $exclusivebrand->opening_hour }}" name="opening_hour" class="form-control" placeholder="Opening hour">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>

</form>
@endsection