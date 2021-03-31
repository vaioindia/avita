@extends('admin.layouts.master')

@section('title')
Technical  Specification
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Technical  Specification</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-primary">Technical  Specification \ Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table mr-1"></i> -->
                <a class="btn btn-primary pull-right" href="{{ route('techspecs.index') }}">Back</a>
            </div>
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
                <form action="{{ route('techspecs.update', $values->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Categorys</strong>
                            <select name="category" class="form-control" id="category">
                                {{-- @foreach($products as $product) --}}
                                <option value=""></option>
                                {{-- @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Product Name</strong>
                            <select name="subcategory" class="form-control" id="subcategory">

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Disclaimer</strong>
                            <input type="test" name="disclaimer" class="form-control" placeholder="Disclaimer">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="form-group">
                            <strong>Condition</strong>
                            <input type="" name="is_cond" class="form-control" placeholder="boolean">
                        </div> --}}<br>
                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" value="1" name="is_cond" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    <strong>Disclaimer</strong>
                                </label>
                            </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamicTable">
                            <tr>
                                <th width="45%">Specification</th>
                                <th width="45%">Value</th>
                                <th width="10%"></th>
                            </tr>
                            <tr>
                                <td><input type="text" name="addmore[0][spec]" value="{{ $values->spec}}" placeholder="Enter your spec" class="form-control" /></td>
                                <td><input type="text" name="addmore[0][value]" value="{{ $values->value}}" placeholder="Enter your value" class="form-control" /></td>

                                <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                            </tr>
                        </table>
                        <div align="right">

                        </div>
                        <div align="center">
                            <button type="submit"  id="save" class="btn btn-info">Save</button>
                        </div>
                        <br />
                        <div id="inserted_item_data"></div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
            </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script type="text/javascript">

    var i = 0;

    $("#add").click(function(){

        ++i;

        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][spec]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][value]" placeholder="Enter your Qty" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">-</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });

</script>

@endsection
