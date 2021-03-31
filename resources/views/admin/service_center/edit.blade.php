@extends('admin.layouts.master')

@section('title')
Retail Partner
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Service Center</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Service Center \ Edit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('service_center.index') }}">Back</a>
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
                <form action="{{ route('service_center.update', $service->id) }}" method="Post" >
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Latitude</strong>
                            <input type="float" name="latitude" class="form-control" value="{{ $service->latitude}}" placeholder="Latitude">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Longitude</strong>
                            <input type="float" name="longitude" class="form-control" value="{{ $service->longitude}}" placeholder="Longitude">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Partner Name</strong>
                            <input type="text" name="name" class="form-control" value="{{ $service->name}}" placeholder="Partner Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Email</strong>
                            <input type="email" name="email" class="form-control" value="{{ $service->email}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Contact No</strong>
                            <input type="text" name="phone" class="form-control" value="{{ $service->phone}}" placeholder="Contact No">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Address</strong>
                            <input type="text" name="address" class="form-control" value="{{ $service->address}}" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Opening hour</strong>
                            <input type="time" name="opening_hour" class="form-control" value="{{ $service->opening_hour}}" placeholder="opening hour">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">closing hour</strong>
                            <input type="time" name="closing_hour" class="form-control" value="{{ $service->closing_hour}}" placeholder="Closing hour">
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
