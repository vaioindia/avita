@extends('admin.layouts.master')

@section('title')
Blog
@endsection


@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Blog</li>
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
                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong>Blog Title</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <strong for="">Short Description</strong>
                                <input type="text" name="short_desc" class="form-control" placeholder="Short Description">
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
                                <strong>Size 330 × 173 px (intrinsic: 1024 × 536 px)</strong>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')

@endsection
