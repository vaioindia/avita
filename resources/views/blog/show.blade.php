@extends('layouts.master')

@section('title')
Blog
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$blog->title}}</h2>

                    <p>Published At: {{date('Y-m-d', strtotime($blog->published_at))}}</p>
                    <br>
                    <div>
                        {{$blog->desc}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection