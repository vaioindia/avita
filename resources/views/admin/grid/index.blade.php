@extends('admin.layouts.master')

@section('title')
Grid
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Grid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Grid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('grid.create') }}">New Grid</a>
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
                                <th>Title</th>
                                <th>Grid Location</th>
                                <th>URL</th>
                                <th>Grid Images</th>
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
                            @foreach ($grids as $grid)
                            <tr>
                                <td>{{ $grid->title }}</td>
                                <td>{{ $grid->type }}</td>
                                <td>{{ $grid->url }}</td>
                                <td>
                                    <img src="{{ URL::to('/') }}/images/grid/{{ $grid->image }}" class="img-thumbnail w-100 h-20"/>
                                    <!-- <img src="{{ asset('/'. $grid->image) }}" alt="{{ $grid->image }}" class="w-50 h-20 "> -->
                                </td>
                                <td>
                                    <form action="{{ route('grid.destroy',$grid->id) }}" method="GET" class="d-inline">
                                        <a href="{{ route('grid.edit',$grid->id) }}" class=""><i class="fas fa-edit  fa-lg"></i></a>
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
