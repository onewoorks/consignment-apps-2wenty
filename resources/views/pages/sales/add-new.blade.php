@extends('layout.template')

@section('header')
@include('layout.common_header', ['menu' => $menu])
@endsection

@section('content')


<div class="container-page">
    <select class="form-control">
        <option value="store_1">Store 1</option>
        <option value="store_2">Store 2</option>
        <option value="store_3">Store 3</option>
    </select>
</div>

<hr />

<div class="row text-center mb-4">
    <div class="col-12">
    <div class="text-uppercase" style="line-height:34px;">consigned stocks</div>
    </div>
</div>


<form id="generate_sales" >

@foreach ($consigned_stocks as $cs)
<div class="card mt-2">
    <div class="card-body">
        <div class="row">
            <div class="col-6">{{ $cs['name'] }}</div>
            <div class="col-3 text-center">{{ $cs['quantity'] }}</div>
            <div class="col-3 text-center">
                <div class="btn btn-warning">Sold</div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="d-grid mt-3">
    <button class="btn btn-primary btn-lg">Generate Sales</button>
</div>
</form>

@endsection

@section('scripts')
<script type="text/javascript">
    $('#generate_sales').submit(function(e){
        e.preventDefault();
        window.location.href = '/sales/generated/1111'
    })
</script>
@endsection