@extends('layout.template')

@section('header')
@include('layout.common_header', ['menu' => $menu])
@endsection

@section('content')
<div class="container-page">

    <div class="text-center text-uppercase">
        generated sales
    </div>

    <hr>
    

    <div class='d-grid'>
        <div class='btn btn-warning'>Consigned Stock</div>
        <div class="btn btn-primary mt-2">Print Receipt</div>
    </div>
</div>
@endsection

@section('scripts')

@endsection