@extends('admin.layouts.master')

@section('title')
Brochure
@endsection

@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Brochures </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('brochure.create') }}"> Create</a>
        </div>
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
        <th>File</th>       
        <th>Action</t>
    </tr>
    <!-- /brochures::url($brochure->reference) -->
    @foreach ($brochures as $brochure)
    <tr class=" text-center">
        <td>{{ $brochure->id }}</td>
        <td><a href="{{ url('brochures/'. $brochure->reference)  }}" target="_blank"s class="text-decoration-none">{{ $brochure->reference }}</a></td>
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
</table>

{!! $brochures->links() !!}

@endsection


@section('scripts')
    
@endsection