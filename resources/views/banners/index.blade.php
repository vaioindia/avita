@extends('layouts.master')

@section('title')
Banner
@endsection

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('banners.create') }}"> Create</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Date</th>
        <th>Sequance</th>
        <th>URL</th>
        <th>Enabled</th>
        <th>Images</th>
        <th class=" text-center">Action</th>
    </tr>
    @foreach ($banners as $banner)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $banner->title }}</td>
        <td>{{ $banner->date }}</td>
        <td>{{ $banner->seq }}</td>
        <td>{{ $banner->url }}</td>
        <td>{{ $banner->enabled }}</td>
        {{-- <td>{{ $banner->image }}</td> --}}
        
        <td><img src="{{ URL::to('/') }}/images/{{ $banner->image }}" height="100" width="100" alt="" /></td>

        <td>
            <form action="{{ route('banners.destroy',$banner->id) }}" method="POST" class=" text-center">

                {{-- <a class="btn btn-info" href="{{ route('banners.show',$banner->id) }}">Show</a> --}}

                <a class="" href="{{ route('banners.edit',$banner->id) }}"><i class="fas fa-edit  fa-lg"></i></a>

                @csrf
                @method('DELETE')
  
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $banners->links() !!}

@endsection

@section('scripts')
    
@endsection