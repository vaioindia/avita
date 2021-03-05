@extends('admin.layouts.master')

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
            <td>{{ $whatnew->title }}</td>
            <td>{{ $whatnew->published_at }}</td>
            <td>{{ $whatnew->url }}</td>
            <td><img src="{{ asset('/'. $whatnew->image)  }}" height="100" width="40%"  alt=""  ></td>
            <td>
            <form action="{{ route('whatnew.destroy',$whatnew->id) }}" method="POST" class="d-inline">
                <a href="{{ route('whatnew.edit',$whatnew->id) }}" class=""><i class="fas fa-edit  fa-lg"></i></a>
                {{ csrf_field() }}
                @method('DELETE')
                <button class="" type="submit" style="border: none; background-color:transparent;">
                <i class="fas fa-trash fa-lg text-danger"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $whatnews->links() !!}
      
@endsection