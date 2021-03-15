@extends('admin.layouts.master')

@section('title')
Blog
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">BLOG</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">BLOG</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('blog.index') }}">Back</a>
            </div>
            <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('blog.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-lg-6"> 
                            <div class="form-group">
                                <strong>Blog Title</strong>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Description</strong>
                                <input type="text" name="desc" value="{{$blog->desc}}" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Date</strong>
                                <input type="date" name="published_at" value="{{$blog->published_at}}" class="form-control" placeholder="Date Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Image</strong>
                                <img src="{{ URL::to('/') }}/images/blog/{{ $blog->image }}" class="img-thumbnail" class="w-50 h-20" />
                                <!-- <img src="{{ url('/'.$blog->image) }}" class="img-thumbnail img-responsive"> -->
                                <input type="file" name="image" value="{{ $blog->image }}" class="form-control img-responsive" placeholder="Image">
                                <strong>Image Again Select</strong>
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

@section('scripts')

@endsection