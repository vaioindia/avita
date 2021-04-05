@extends('admin.layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
 <main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body large">News</div>
                    <div class="row">
                        <div class=" col-md-6"><i class="text-white ml-4 fa-3x fas fa-bell"></i></div>
                        <div class=" col-md-6"><h3 class="fa-3x text-white text-right mr-4">{{$count1}}</h3></div>
                    </div>

                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/whatnew') }}">View Details</a>
                        {{-- <div class="large text-white"><i class="fas fa-bell"></i></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Service Center</div>
                    <div class="row">
                        <div class=" col-md-6"><i class="text-white ml-4 fa-3x fas fa-tools"></i></div>
                        <div class=" col-md-6"><h3 class="fa-3x text-white text-right mr-4">{{$count2}}</h3></div>
                    </div>

                    {{-- <div class="text-white text-right mr-3">{{$count2}}</div> --}}
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/service_center') }}">View Details</a>
                        {{-- <div class="large text-white"><i class="fas fa-tools"></i></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Exclusive Brand Store</div>
                    <div class="row">
                        <div class=" col-md-6"><i class="text-white ml-4 fa-3x fas fa-store"></i></div>
                        <div class=" col-md-6"><h3 class="fa-3x text-white text-right mr-4">{{$count3}}</h3></div>
                    </div>

                    {{-- <div class="text-white text-right mr-3">{{$count3}}</div> --}}
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/exclusivebrand') }}">View Details</a>
                        {{-- <div class="large text-white"><i class="fas fa-store"></i></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Retail Store </div>
                    <div class="row">
                        <div class=" col-md-6"><i class="text-white ml-4 fa-3x fas fa-store"></i></div>
                        <div class=" col-md-6"><h3 class="fa-3x text-white text-right mr-4">{{$count4}}</h3></div>
                    </div>

                    {{-- <div class="text-white text-right mr-3">{{$count4}}</div> --}}
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/retailpartner') }}">View Details</a>
                        {{-- <div class="text-white"><i class="fas fa-store"></i></div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="50"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                User Details
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Action</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th> --}}
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                {{-- <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->is_admin }}</td>
                                <td>{{ Auth::user()->email }}</td> --}}
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->is_admin }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="" method="GET" class="d-inline">
                                        <a href="" class=""><i class="fas fa-edit  fa-lg"></i></a>
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="" type="submit" style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i></button>
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

<script type="text/javascript" defer src="{{ asset('assets/demo/Chart.min.js') }}"></script>
<script type="text/javascript" defer src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
<script type="text/javascript" defer src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>

@endsection
