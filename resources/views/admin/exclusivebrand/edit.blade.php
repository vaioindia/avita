@extends('admin.layouts.master')

@section('title')
Retail Partner
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Exclusive Brand Partner</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Exclusive Brand Partner \ Edit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('exclusivebrand.index') }}">Back</a>
            </div>
            <div class="card-body">
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
                <form action="{{ route('exclusivebrand.update', $exclusivebrands->id) }}" method="POST">
                @csrf               
                <div class="row">
                
                    <div class="col-lg-6"> 
                        <div class="form-group">
                            <strong>Latitude</strong>
                            <input type="float" name="latitude" class="form-control" value="{{ $exclusivebrands->latitude}}" placeholder="Latitude">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Longitude</strong>
                            <input type="float" name="longitude" class="form-control" value="{{ $exclusivebrands->longitude}}" placeholder="Longitude">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Partner Name</strong>
                            <input type="text" name="name" class="form-control" value="{{ $exclusivebrands->name}}" placeholder="Partner Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Email</strong>
                            <input type="email" name="email" class="form-control" value="{{ $exclusivebrands->email}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Contact No</strong>
                            <input type="text" name="phone" class="form-control" value="{{ $exclusivebrands->phone}}" placeholder="Contact No">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Address</strong>
                            <input type="text" name="address" class="form-control" value="{{ $exclusivebrands->address}}" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Opening hour</strong>
                            <input type="time" name="opening_hour" class="form-control" value="{{ $exclusivebrands->opening_hour}}" placeholder="opening hour">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">closing hour</strong>
                            <input type="time" name="closing_hour" class="form-control" value="{{ $exclusivebrands->closing_hour}}" placeholder="Closing hour">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>                   
                </div>
            </form>  
            </div>
        </div>
    </div>
</main>
@endsection