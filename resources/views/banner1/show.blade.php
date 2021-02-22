@extends('layouts.master')

@section('title')
Banner
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('banner.index') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>latitude</th>
        <th>longitude</th>
        <th>Partner Name</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Address</th>
        <th>Opening hour</th>
        <th>Actions</th>
    </tr>
    @foreach ($stores as $store)
        <tr>
            <td>{{ $store->latitude }}</td>
            <td>{{ $store->longitude }}</td>
            <td>{{ $store->name }}</td>
            <td>{{ $store->email }}</td>
            <td>{{ $store->phone }}</td>
            <td>{{ $store->address }}</td>
            <td>{{ $store->opening_hour }}</td>
            <td>
            <form action="{{ route('banner.destroy',$store->id) }}" method="POST">
                    {{-- <!-- <a href="{{ route('store.index',$stores->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a> --> --}}

                    {{-- <a href="{{ route('store.edit',$store->id) }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a> --}}

                    <!-- @csrf
                    @method('DELETE') -->

                     @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $stores->links() !!}

@endsection


@section('scripts')
    
@endsection