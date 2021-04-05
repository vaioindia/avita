@extends('admin.layouts.master')

@section('title')
Brochure
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Brochure</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Brochure</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('brochure.create') }}">New Brochure</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <!-- <th>S.No</th> -->
                                <th>File</th>
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
                            @foreach ($brochures as $brochure)
                            <tr>
                                <!-- <td>{{ $brochure->id }}</td> -->
                                <td ><a href="{{ url('brochures/'. $brochure->reference)  }}" target="_blank"s class="text-decoration-none">{{ $brochure->reference }}</a></td>
                                <td>
                                     <form action="{{ route('brochure.destroy',$brochure->id) }}" method="POST" class=" text-center">
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
