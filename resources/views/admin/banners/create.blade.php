@extends('admin.layouts.master')

@section('title')
Banner
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Banner</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Banner / Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('banners.index') }}">Back</a>
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
                        <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">Title</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">Date</strong>
                                    <input type="date" name="date" class="form-control" placeholder="Date">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">Sequance</strong>
                                    <input type="text" name="seq" class="form-control" placeholder="Sequance">
                                </div>
                            </div>
                            <div  class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">URL</strong>
                                    <input type="text" name="url" class="form-control" placeholder="URL">
                                </div>
                            </div>
                            {{-- <div  class="col-lg-6">
                                <div class="form-group">
                                    <strong for="">Enabled</strong>
                                    <input type="text" name="enabled" class="form-control" placeholder="Enabled">
                                </div>
                            </div> --}}
                            <div class="col-lg-6">
                                {{-- <br>
                                    <div class="form-check form-group">
                                        <input class="form-check-input" type="checkbox" value="1" name="enabled" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <strong>Enabled</strong>
                                        </label>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <strong for="">Status</strong><br>
                                        <input type="checkbox" name="enabled" checked data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger">
                                    </div> --}}
                                    <strong for="">Status</strong>
                                    <select name="status" class="form-control">
                                    <option value="">--- Select Status ---</option>
                                    {{-- @foreach ($categorys as $key => $value) --}}
                                        <option value="enabled">Enabled</option>
                                        <option value="disabled">Disabled</option>
                                    {{-- @endforeach --}}
                                </select>
                            </div>
                            <div  class="col-lg-6">
                                <div class="from-group">
                                    <strong>Web Image</strong>
                                    <input type="file" name="web_image" class="form-control img-responsive" placeholder="URL">
                                </div>
                            </div>

                            <div  class="col-lg-6">
                                <div class="from-group">
                                    <strong>Mob Image</strong>
                                    <input type="file" name="mob_image" class="form-control img-responsive" placeholder="URL">
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
