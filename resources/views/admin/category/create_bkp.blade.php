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
            <h2>Add New </h2>
        </div>
        <div class="pull-right">
            <a class="btn  btn-default" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
            <div class="row">
            <div class=" container-fluid">
                {{-- <div class="col-md-5">
                    <strong>S.No</strong>
                    <input type="text" name="id" class="form-control" placeholder="S.No">
                </div> --}}
                <div class="col-md-12 form-group">
                    <strong>Type</strong>
                    <select name="type" class="form-control">
                    <option value="laptops">Laptops</option>
                    <option value="smart devices">Smart Devices</option>
                    <option value="accessories">Accessories</option>
                    </select>
                    

                </div>
                <div class="col-md-12">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                 
                <div class="col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn  btn-default">Submit</button>
                </div>
            </div>
        </div>
</form>
@endsection