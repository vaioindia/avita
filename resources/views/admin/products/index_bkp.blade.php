@extends('admin.layouts.master')

@section('title')
Product
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
            <a class="btn btn-default" href="{{ route('products.create') }}">New Product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-info text-center">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr class=" text-center">
        <!-- <th>S.No</th>  -->
        <th>Type</th>
        <th>Name</th>
        
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
    <tr class=" text-center">
        <!-- <td>{{ $product->id }}</td> -->
        <td>{{ $product->type }}</td>
        <td>{{ $product->name }}</td>
        
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST" class=" text-center">

                {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}

                <a class="" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit  fa-lg"></i></a>

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

{!! $products->links() !!}

@endsection

@section('scripts')
    
@endsection