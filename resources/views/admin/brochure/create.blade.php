@extends('admin.layouts.master')

@section('title')
Brochure
@endsection


@section('content')<br><br>
<div class="row">
    <br>
    <br>
    <div class="col-lg-12">
        <div class="pull-left">
            <br>
            <h2>Brochure File</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-default" href="{{ route('brochure.index') }}" title="Go back">Back</a>
        </div>
    </div>
</div>
<div class="container">
        <div class="col-md-12">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('brochure.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <strong>File</strong>
                            <input type="file" name="reference" class="form-control" placeholder="">
                        </div>
                       
                        <div class=" text-center mt-1">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                    </form>
                    
                </div>
            
        </div>    
</div>
@endsection

@section('scripts')

@endsection