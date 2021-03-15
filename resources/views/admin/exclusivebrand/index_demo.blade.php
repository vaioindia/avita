@extends('admin.layouts.master')

@section('title')
Retail Partner
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Exclusive Brand Partner</h1>

<table>
        <tbody>
                        
                        @foreach( $ebs as $eb)
                            <tr>
                                <td>{{ $eb->latitude }}</td>
                                <td>{{ $eb->longitude }}</td>
                                <td>{{ $eb->name }}</td>
                                <td>{{ $eb->email }}</td>
                                <td>{{ $eb->phone }}</td>
                                <td>{{ $eb->address }}</td>
                                <td>{{ $eb->opening_hour }}</td>
                                <td>{{ $eb->opening_hour }}</td>
                                <td>

                            </tr>
                        @endforeach
                          </tbody>
                          </table>       

       </div> 

       </main>
@endsection


@section('scripts')
    
@endsection