@extends('admin.layouts.master')

@section('title')
Grid
@endsection


@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Grid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Grid / Edit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('grid.index') }}">Back</a>
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
                        <form action="{{ route('grid.update',$grid->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <strong for="">Location</strong>
                                {{-- @if ($type = 'Grid 1')

                                @else

                                @endif --}}
                                <select name="type" class="form-control"  id="category">
                                    <option value="{{ $grid->type }}">{{ $grid->type }}</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">Title</strong>
                                    <input type="text" name="title" value="{{ $grid->title }}" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">URL</strong>
                                    <input type="text" name="url" value="{{ $grid->url }}" class="form-control" placeholder="URL">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="from-group">
                                    <strong>Image</strong><br>
                                    <img src="{{ URL::to('/') }}/images/grid/{{ $grid->image }}" class="img-thumbnail" class="w-100 h-100" />
                                    <input type="file" name="image" value="{{ $grid->image }}" class="form-control">
                                    <strong>Image Again Select Size(480 × 259 px)</strong>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')

@endsection
