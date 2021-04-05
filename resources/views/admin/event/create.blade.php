@extends('admin.layouts.master')

@section('title')
Event
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Event</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Events / Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('event.index') }}">Back</a>
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
                        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Description</strong>
                                <input type="text" name="desc" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Date</strong>
                                <input type="date" name="published_at" class="form-control" placeholder="Date Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Image</strong>
                                <input type="file" name="image" class="form-control img-responsive" placeholder="Image">
                                <strong>Size 330 × 186 px (intrinsic: 800 × 450 px)</strong>

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
