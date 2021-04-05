@extends('admin.layouts.master')

@section('title')
New And Event
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">News</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">News</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('whatnew.create') }}">New News</a>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-info text-center">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <!-- <th>No</th> -->
                                <th>Title</th>
                                <th>Date</th>
                                <th>Url</th>
                                <th>Publications</th>
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
                           @foreach ($whatnews as $whatnew)
                            <tr>
                                <!-- <td>{{ ++$i }}</td> -->
                                <td>{{ $whatnew->title }}</td>
                                <td>{{ $whatnew->published_at }}</td>
                                <td>{{ $whatnew->url }}</td>
                                <td>{{ $whatnew->published }}</td>
                                <td width="50%">
                                    <img src="{{ URL::to('/') }}/images/news/{{ $whatnew->image }}" class="img-thumbnail w-100 h-20"/>
                                </td>
                                <td>
                                    <form action="{{ route('whatnew.destroy',$whatnew->id) }}" method="GET" class="d-inline">
                                        <a href="{{ route('whatnew.edit',$whatnew->id) }}" class=""><i class="fas fa-edit  fa-lg"></i></a>
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

@section('scripts')

@endsection
