@extends('admin.layouts.master')

@section('title')
Service Center
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 ">
        <div class="pull-left">
        <br>
            <h2> Service Center</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default m-4" href="{{ route('service_center.create') }}" title="Create">New Service Center</i>
                </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-info text-center">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr class=" text-center">
        <th>latitude</th>
        <th>longitude</th>
        <th>Partner Name</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Address</th>
        <th>Opening hour</th>
        <th>Closing hour</th>
        <th>Actions</th>
    </tr>
    @foreach ($services as $service)
        <tr class=" text-center">
            <td>{{ $service->latitude }}</td>
            <td>{{ $service->longitude }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->email }}</td>
            <td>{{ $service->phone }}</td>
            <td>{{ $service->address }}</td>
            <td>{{ $service->opening_hour }}</td>
            <td>{{ $service->closing_hour }}</td>
            <td>
            <form action="{{ route('service_center.destroy',$service->id) }}" method="POST">
                    

                    <a href="{{ route('service_center.edit',$service->id) }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>

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

{!! $services->links() !!}
@endsection


@section('scripts')
    
@endsection