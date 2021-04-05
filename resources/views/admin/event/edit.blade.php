@extends('admin.layouts.master')

@section('title')
Event
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Events</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Event / Edit</li>
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
                        <form action="{{ route('event.update',$event->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" value="{{$event->title}}" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Description</strong>
                                <input type="text" name="desc" value="{{$event->desc}}" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Date</strong>
                                <input type="date" name="published_at" value="{{$event->published_at}}" class="form-control" placeholder="Date Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Image</strong>
                                <img src="{{ URL::to('/') }}/images/events/{{ $event->image }}" class="img-thumbnail" class="w-50 h-20" />
                                <!-- <img src="{{ url('/'.$event->image) }}" class="img-thumbnail img-responsive"> -->
                                <input type="file" name="image" value="{{ $event->image }}" class="form-control img-responsive" placeholder="Image">
                                <strong>Image Again Select Size 330 × 186 px (intrinsic: 800 × 450 px)</strong>
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
