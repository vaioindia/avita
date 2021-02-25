@extends('layouts.master')

@section('title')
Store
@endsection

@section('contant')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>  </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('store.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Latitude:</strong>
            {{ $store->latitude }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Longitude</strong>
            {{ $store->longitude }}
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Partner Name</strong>
            {{ $store->name }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            {{ $store->email }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact No</strong>
            {{ $store->phone }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address</strong>
            {{ $store->address }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Opening hour</strong>
            {{ $store->opening_hour }}

        </div>
    </div>
</div>
@endsection