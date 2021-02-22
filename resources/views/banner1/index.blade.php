@extends('layouts.master')

@section('title')
Banner
@endsection

@section('content')
 

    <h3>Bannere</h3>
    <form action="{{ url('banner') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {!! csrf_field() !!}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="row">
            <div class=" float-right">
                <br>
                <a class="btn btn-white" href="{{ route('banner.show') }}" title="Go back" style="background: #662d91">
                    <i class="fas fa-eye text-success  fa-lg"></i></a>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-5">
                <strong>S.No</strong>
                <input type="text" name="id" class="form-control" placeholder="S.No">
            </div>
            <div class="col-md-5">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Url</strong>
                <input type="text" name="url" class="form-control" placeholder="URL">
            </div>
            <div class="col-md-5">
                <strong>Date</strong>
                <input type="date" name="date" class="form-control" placeholder="Title">
            </div>
            
            <div class="col-md-5">
                <strong>Sequance</strong>
                <input type="text" name="seq" class="form-control" placeholder="Sequance">
            </div>
            <div class="custom-control custom-switch col-md-5">
                <strong>Enable</strong>
                <br>
                <input type="checkbox" class="custom-control-input" id="switch1" name="enabled">
                <label class="custom-control-label" for="switch1"></label>
              </div>
            <div class="col-md-5">
                <strong>Image</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 

    @if($images->count())
    @foreach($images as $image)
    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
    <strong>Title:</strong>
        <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
            <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
            <div class='text-center'>
                <small class='text-muted'>{{ $image->title }}</small>
            </div> <!-- text-center / end -->
        </a>
        <strong>Title:</strong>
        <form action="{{ url('banner',$image->id) }}" method="POST">
        <input type="hidden" name="_method" value="delete">
        {!! csrf_field() !!}
        <button type="submit" style="border: none; background-color:transparent;">
        <i class="fas fa-trash fa-lg text-danger"></i></button>
        </form>
    </div> <!-- col-6 / end -->
    @endforeach
@endif
    
</div> <!-- container / end -->

<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
@endsection


@section('scripts')
    
@endsection