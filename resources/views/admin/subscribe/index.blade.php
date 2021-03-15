@extends('admin.layouts.master')

@section('title')
Home Page
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Subscribe</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Subscribe</li>
        </ol>
        <div class="card mb-4">
            <!-- <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                <a class="btn btn-primary pull-right" href="{{ route('subscribe.create') }}">subscribe</a>
            </div> -->
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
                                <!-- <th>S.No</th> -->
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                             @foreach ($subscribes as $subscribe)
                            <tr>
                                <!-- <td>{{ $subscribe->id }}</td> -->
                                <td >{{ $subscribe->email }}</td>
                                <td>
                                     <form action="{{ route('subscribe.destroy',$subscribe->id) }}" method="GET" class=" text-center">
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