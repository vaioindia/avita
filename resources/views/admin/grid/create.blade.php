@extends('admin.layouts.master')

@section('title')
Grid
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Grid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Grid / Create</li>
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
                        <form action="{{ route('grid.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- {!! BootForm::select('type', 'Location', $types) !!} --}}
                                <strong for="">Location</strong>
                                <select name="type" class="form-control">
                                    <option value="">--- Select Location ---</option>
                                    {{-- @foreach ($categorys as $key => $value) --}}
                                        <option value="Grid 1">Grid 1</option>
                                        <option value="Grid 2">Grid 2</option>
                                        <option value="Grid 3">Grid 3</option>
                                        <option value="Grid 4">Grid 4</option>
                                    {{-- @endforeach --}}
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">Title</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">URL</strong>
                                    <input type="text" name="url" class="form-control" placeholder="URL">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="from-group">
                                    <strong>Image</strong>
                                    <input type="file" name="image" class="form-control img-responsive" placeholder="URL">
                                    <strong>Size(480 × 259 px)</strong>
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
