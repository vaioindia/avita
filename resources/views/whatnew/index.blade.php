@extends('layouts.master')

@section('title')
New And Event
@endsection

@section('content')
    <br><br>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>What's News</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('whatnew.create') }}"> Create News</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr class="text-center">
            <th>No</th>
            <th>Title</th>
            <th>Date</th>
            <th>Url</th>
            <th>Image</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($whatnews as $whatnew)
        <tr class="text-center">
            <td>{{ ++$i }}</td>
            <td>{{ $whatnew->titlle }}</td>
            <td>{{ $whatnew->published_at }}</td>
            <td>{{ $whatnew->url }}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $whatnew->image }}" height="100" width="40%" alt="" /></td>
            <td>
                <form action="{{ route('whatnew.destroy',$whatnew->id) }}" method="POST">
   
                    <!-- <a class="btn btn-info" href="{{ route('whatnew.show',$whatnew->id) }}">Show</a> -->
    
                    <a class="btn btn-primary" href="{{ route('whatnew.edit',$whatnew->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $whatnews->links() !!}
      
@endsection

