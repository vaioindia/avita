@extends('admin.layouts.master')

@section('title')
Blog
@endsection


@section('content')
<br>
<div class="row">
    <div class="col-lg-12 ">
        <div class="pull-left">
        <br>
            <h2>Blog</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default m-4" href="{{ route('blog.create') }}" title="Create a product">New Blog</i>
                </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-info text-center">
        <p>{{ $message }}</p>
    </div>
@endif
                <table class="table table-bordered">
                    {{-- <thead> --}}
                        <tr class=" text-center">
                            <!-- <th>Id</th> -->
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Date</th>
                            <th>Image</th>
                            {{-- <th>Created at</th> --}}
                            <th colspan="2">Action</th>
                        </tr>
                    {{-- </thead> --}}
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr class=" text-center ">
                            <!-- <td>{{ $blog->id }}</td> -->
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->desc }}</td>
                            <td>{{ date('Y-m-d', strtotime($blog->published_at)) }}</td>

                            <td>        
                                <img src="{{ asset('/'. $blog->image)  }}" height="100" width="40%"  alt="" >
                            </td>

                            <td class=" text-center">
                                <form action="{{ route('blog.destroy',$blog->id) }}" method="POST" class="d-inline">
                                <a href="{{ route('blog.edit',$blog->id) }}" class=""><i class="fas fa-edit  fa-lg"></i></a>
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="" type="submit" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection