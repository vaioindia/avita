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
                <form action="{{ route('techspecs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong for="">Categorys</strong>
                            <select name="product_id" class="form-control">
                                @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Product Name</strong>
                            <select name="product_id" class="form-control">
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Disclaimer</strong>
                            <input type="test" name="disclaimer" class="form-control" placeholder="Disclaimer">
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Condition</strong>
                            <input type="1" name="is_cond" class="form-control" placeholder="boolean">
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <br>
                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" value="1" name="is_cond" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    <strong>Enabled</strong>
                                </label>
                            </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="crud_table">
                            <tr>
                                <th width="45%">Specification</th>
                                <th width="45%">Value</th>
                                <th width="10%"></th>
                            </tr>
                            <tr>
                                <td contenteditable="true" class="item_spec"></td>
                                <td contenteditable="true" class="item_value"></td>
                                <td></td>
                            </tr>
                        </table>
                        <div align="right">
                            <button type="button" name="add" id="editBtn" data-target="#editBtn" class="btn btn-success btn-xs">+</button>
                        </div>
                        <div align="center">
                            <button type="submit"  id="save" class="btn btn-info">Save</button>
                        </div>
                        <br />
                        <div id="inserted_item_data"></div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button>                    -->
                </div>
            </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')

<script type="text/javascript">

$(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {


                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });

$(document).ready(function(){
    var count - 1;
    $('#add').click(function(){
        count = count + 1;
        var html_code = "<tr id='row"+count+"'>";
        html_code += "<td contenteditable='true' class='item_spec'></td>";
        html_code += "<td contenteditable='true' class='item_value'></td>";
        html_code += "<td> <button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
        hmtl_code += "</tr>";

        $('#surd_table').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});
</script>

@endsection
