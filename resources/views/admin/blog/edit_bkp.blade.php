@extends('admin.layouts.master')

@section('title')
Blog
@endsection

@section('content')
<br><br>
<div class="row">
    <br>
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Edit Blog</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-default" href="{{ route('blog.index') }}" title="Go back"> <i class="fas fa-backward "></i> Back</a>
        </div>
    </div>
</div>
<div class="container-fluid">
        <div class="col-md-12">
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <form action="{{ route('blog.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                        @csrf
                       
                        <div class="form-group">
                            <strong>Blog Title</strong>
                            <input type="text" name="title" class="form-control" value="{{$blog->title}}">
                        </div>
                        <div class="form-group">
                            <strong>Blog Body</strong>
                            <input name="desc" id="" width="100" rows="10" rows="10" class="form-control" value="{{$blog->desc}}">
                        </div>
                        <div class="form-group">
                            <strong>Blog Body</strong>
                            <input name="published_at" type="date" id="" width="100" rows="10" rows="10" class="form-control" value="{{$blog->published_at}}">
                        </div>
                        <div class="form-group">
                            <strong>Images</strong>
                            <br>
                            <br>
                            <img src="{{ url('/'.$blog->image) }}" class="img-thumbnail" width="100">
                            <input type="file" name="image" value="{{ $blog->image }}"  placeholder="Upload">
                        </div>
                        <div class="text-center">
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