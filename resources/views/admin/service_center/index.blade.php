@extends('admin.layouts.master')

@section('title')
Service Center
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Service Center</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Service Center</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('service_center.create') }}">New Service Center</a>
            </div>

            <form method="POST" enctype="multipart/form-data" action="{{ route('service_center.import') }}">
                @csrf
                <div class="form-group">
                <table class="table">
                <tr class="card-header">
                <td width="40%" align="right"><label>Select File</label></td>
                <td width="30">
                    <input type="file" name="select_file" />
                </td>
                <td width="30%" align="left">
                    <input type="submit" name="upload" class="btn btn-primary" value="Import">
                    <a class="btn btn-primary" href="{{ route('service_center.export') }}">Export</a>
                </td>
                </tr>
                {{-- <tr>
                <td width="40%" align="right"></td>
                <td width="30"><span class="text-muted">.xls, .xslx</span></td>
                <td width="30%" align="left"></td>
                </tr> --}}
                </table>
                </div>
            </form>

            <div class="card-body">
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
                @if ($message = Session::get('success'))
                    <div class="alert alert-info text-center">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>latitude</th>
                                <th>longitude</th>
                                <th>Partner Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Address</th>
                                <th>Opening hour</th>
                                <th>Closing hour</th>
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
                             @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->latitude }}</td>
                                <td>{{ $service->longitude }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->email }}</td>
                                <td>{{ $service->phone }}</td>
                                <td>{{ $service->address }}</td>
                                <td>{{ $service->opening_hour }}</td>
                                <td>{{ $service->closing_hour }}</td>
                                <td>
                                    <form action="{{ route('service_center.destroy',$service->id) }}" method="GET">

                                            <a href="{{ route('service_center.edit',$service->id) }}">
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
