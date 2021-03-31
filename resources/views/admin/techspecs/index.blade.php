@extends('admin.layouts.master')

@section('title')
Technical  Specification
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Technical  Specification</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Technical  Specification</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('techspecs.create') }}">New Specification</a>
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
                                <th>Product Name</th>
                                <th>Specification</th>
                                <th>Value</th>
                                <th>Condition</th>
                                <th>Disclaimer</th>
                                <th>Actions</th>
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
                            @foreach($values as $value)
                            <tr>
                                <td></td>
                                <td>{{$value->spec}}</td>
                                <td>{{$value->value}}</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <form action="{{ route('techspecs.destroy',$value->id) }}" method="GET">
                                            <a href="{{ route('techspecs.edit',$value->id) }}">
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
