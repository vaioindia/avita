@extends('admin.layouts.master')

@section('title')
Brochure
@endsection


@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Brochure</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Brochure / Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('brochure.index') }}">Back</a>
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
                <form action="{{ route('brochure.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- <strong><h4>File</h4></strong>
                    <div class="from-group  m-2">
                        <input type="file" name="reference" class="form-control" placeholder="">
                        <small class="text-primary">File: doc,docx,pdf,ppt,pptx,csv</small>
                    </div> -->

                    <div class="row">
                        <div class="col-lg-6"> 
                            <div class="form-group">
                                <strong><h4>File</h4></strong>
                                <input type="file" name="reference" class="form-control" placeholder="">
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