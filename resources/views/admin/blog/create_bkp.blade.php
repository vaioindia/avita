@extends('admin.layouts.master')

@section('title')
Blog
@endsection


@section('content')<br><br>
<div class="row">
    <br>
    <br>
    <div class="col-lg-12">
        <div class="pull-left">
            <br>
            <h2>Create Blog</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-default" href="{{ route('blog.index') }}" title="Go back"> <i class="fas fa-backward "></i> Back</a>
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
                    
                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <strong for="">Blog Title</strong>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <strong for="">Description</strong>
                            <input type="text" name="desc" id="" width="100" rows="10" class="form-control">
                        </div>

                        <div class="form-group">
                            <strong for="">Date</strong>
                            <input type="date" name="published_at" class="form-control">
                        </div>

                        <div class="from-group">
                            <strong>Image</strong>
                            <input type="file" name="image" class="form-control" placeholder="">
                        </div>
                        {{-- <div class="col-md-12 text-center">
                            <br>
                            <button type="submit" class="btn  btn-default tex">Submit</button>
                        </div> --}}
                        <div class=" text-center mt-1">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                    </form>
                    
                </div>
            
        </div>    
</div>
@endsection

@section('scripts')
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection