@extends('admin.layouts.master')

@section('title')
New And Event
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Event</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Events</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('event.create') }}">New Event</a>
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
                                <!-- <th>No</th> -->
                                <th>Title</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
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
                           @foreach ($events as $event)
                            <tr>
                                <!-- <td>{{ ++$i }}</td> -->
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->published_at }}</td>
                                <td>{{ $event->desc }}</td>
                                <td width="40%">
                                    <img src="{{ URL::to('/') }}/images/events/{{ $event->image }}" class="img-thumbnail w-100 h-20"/>
                                </td>
                                <td>
                                    <form action="{{ route('event.destroy',$event->id) }}" method="GET" class="d-inline">
                                        <a href="{{ route('event.edit',$event->id) }}" class=""><i class="fas fa-edit  fa-lg"></i></a>
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
