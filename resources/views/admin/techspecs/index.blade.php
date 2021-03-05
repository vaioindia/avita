@extends('admin.layouts.master')
@section('title')
Techspec
@endsection

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>
            Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('techspecs.create') }}"> Add Specification</a>
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
        <th>Product Name</th>
        <th>Specs </th>
        <th>Value</th>
        <th>Cond</th>
        <th>Disclaimer</th>
        
        <th>Actions</th>
    </tr>
    
        <tr class=" text-center">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td>
            <form action="{{ route('techspecs.index') }}" method="POST">
                    {{-- <!-- <a href="{{ route('store.index',$stores->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a> --> --}}

                    <a href="{{ route('techspecs.index') }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>

                    <!-- @csrf
                    @method('DELETE') -->

                     <!-- @csrf
                    @method('DELETE') -->
                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </>
        </tr>
   
</table>

@endsection