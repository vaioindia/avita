@extends('admin.layouts.master')

@section('title')
categorys
@endsection

@section('content')
<br>
<br>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Techspec</h2>
        </div>
        <div class="pull-right">
            <a class="btn  btn-default" href="{{ route('techspecs.index') }}">Back</a>
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

<form action="#" method="GET" enctype="multipart/form-data">
    @csrf

            <div class="row">
            <div class=" container">
            <div class="row">
                <div class="col-md-6 ">
                    <strong>@lang('Type')</strong>
                    <select name="product_id" class="form-control">
                        @foreach($products as $product)
                        <option  value="{{$product->id}}">{{$product->type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <strong>@lang('Name')</strong>
                    <select name="product_id" class="form-control">
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>


                <div class="col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn  btn-default">Submit</button>
                </div>
            </div>
        </div>
</form>
@endsection
