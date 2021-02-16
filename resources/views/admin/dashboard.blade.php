@extends('layouts.master')

@section('title')
Dashboard 
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="">
            <h4 class="card-title text-center"> Table on Plain Background</h4>
            <p class="category text-center"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Name
                        </th>
                        <th>
                            Country
                        </th>
                        <th>
                            City
                        </th>
                        <th class="text-right">
                            Salary
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Jon Porter
                            </td>
                            <td>
                                Portugal
                            </td>
                            <td>
                                Gloucester
                            </td>
                            <td class="text-right">
                                $98,615
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
@endsection