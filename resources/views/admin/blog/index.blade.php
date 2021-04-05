@extends('admin.layouts.master')
@section('title')
Blog
@endsection
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Blog</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('blog.create') }}">Create Blog</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Short Description</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Image</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td >{{ $blog->desc }}</td>
                                <td >{{ $blog->short_desc }}</td>
                                <td>{{ $blog->published_at }}</td>
                                <td width="40%">
                                    <img src="{{ URL::to('/') }}/images/blog/{{ $blog->image }}" class="img-thumbnail w-100 h-20"/>
                                </td>
                                <td>
                                    <form action="{{ route('blog.destroy',$blog->id) }}" method="GET" class="d-inline">
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
    </div>
</main>
@endsection
