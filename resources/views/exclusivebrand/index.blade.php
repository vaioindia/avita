@extends('layouts.master')

@section('title')
Retail Partner
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 ">
        <div class="pull-left">
        <br>
            <h2>Exclusive Brand Partner</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default m-4" href="{{ route('exclusivebrand.create') }}" title="Create a product">New Brand Partner</i>
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
        <th>Actions</th>
    </tr>
    @foreach ($exclusivebrands as $exclusivebrand)
        <tr class=" text-center">
            <td>{{ $exclusivebrand->latitude }}</td>
            <td>{{ $exclusivebrand->longitude }}</td>
            <td>{{ $exclusivebrand->name }}</td>
            <td>{{ $exclusivebrand->email }}</td>
            <td>{{ $exclusivebrand->phone }}</td>
            <td>{{ $exclusivebrand->address }}</td>
            <td>{{ $exclusivebrand->opening_hour }}</td>
            <td>
            <form action="{{ route('exclusivebrand.destroy',$exclusivebrand->id) }}" method="POST">
                    {{-- <!-- <a href="{{ route('store.index',$stores->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a> --> --}}

                    <a href="{{ route('exclusivebrand.edit',$exclusivebrand->id) }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>

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

{!! $exclusivebrands->links() !!}
@endsection


@section('scripts')
    
@endsection