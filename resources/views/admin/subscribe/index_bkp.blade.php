@extends('admin.layouts.master')

@section('title')
Home Page
@endsection

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Front </h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-default" href="{{ route('products.create') }}"></a>
        </div> -->
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-info text-center">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr class=" text-center">
        <th>S.No</th> 
        <th>Email</th>       
        <th>Action</t>
    </tr>
    @foreach ($subscribes as $subscribe)
    <tr class=" text-center">
        <td>{{ $subscribe->id }}</td>
        <td>{{ $subscribe->email }}</td>
        <td>
            <form action="{{ route('subscribe.destroy',$subscribe->id) }}" method="POST" class=" text-center">
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

{!! $subscribes->links() !!}

@endsection


@section('scripts')
    
@endsection