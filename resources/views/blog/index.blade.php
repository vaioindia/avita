@extends('layouts.master')

@section('title')
Blog
@endsection


@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="{{ route('blog.create') }}" class="btn btn-default mb-2">Create Blog</a> 
                <br>
                <table class="table table-bordered">
                    {{-- <thead> --}}
                        <tr class=" text-center">
                            <th>Id</th>
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
                        <tr class=" text-center">
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->desc }}</td>
                            <td>{{ date('Y-m-d', strtotime($blog->published_at)) }}</td>

                            <td>        
                                <img src="{{ asset('images/'. $blog->image)  }}" height="100" width="100" alt="" >
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