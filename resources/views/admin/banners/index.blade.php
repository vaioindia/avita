@extends('admin.layouts.master')

@section('title')
Banner
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Banner</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Banner</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('banners.create') }}">New Banner</a>
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
                                <th>Date</th>
                                <th>Sequance</th>
                                <th>URL</th>
                                <th>Status</th>
                                <th>Images</th>
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
                            @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->date }}</td>
                                <td>{{ $banner->seq }}</td>
                                <td>{{ $banner->url }}</td>
                                <td><div class="form-check form-group">
                                   <!-- <input class="form-check-input" type="checkbox" value="{{ $banner->enabled }}" name="enabled" id="defaultCheck1"> --->
                                   @if($banner->enabled == 1)
                                        <span>Enabled</span>
                                        @else
                                        <span>Disabled</span>
                                        @endif
                                    <label class="form-check-label" for="defaultCheck1">
                                        <strong></strong>
                                    </label>
                                </div></td>
                                <td width="40%">
                                    <img src="{{ URL::to('/') }}/images/banner/{{ $banner->image }}" class="img-thumbnail w-50 h-20"/>
                                    <!-- <img src="{{ asset('/'. $banner->image) }}" alt="{{ $banner->image }}" class="w-50 h-20 "> -->
                                </td>
                                <td>
                                    <form action="{{ route('banners.destroy',$banner->id) }}" method="GET" class="d-inline">
                                        <a href="{{ route('banners.edit',$banner->id) }}" class=""><i class="fas fa-edit  fa-lg"></i></a>
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
