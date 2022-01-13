@extends('layout.template')

@section('header')
@include('layout.common_header', ['menu' => $menu])
@endsection

@section('content')


<div class="container-page">
    <input type="text" placeholder="Find sales by resit number" class="form-control text-center" />
</div>

<div class='d-grid mt-2'>
    <a 
        href="/sales/new"
        class="btn btn-primary btn-block">Create New Sales</a>
</div>

<hr />

@foreach($items as $item)
<div class="card mt-2">
    <div class="card-body">
        <div class="row">
            <div class="col-10">
                <div class='text-main'>}</div>
                <div class='text-sub'></div>
</div>
<div class="col-2 text-center">
    <div class="text-bignumber"></div>
</div>
        </div>

    </div>
</div>
@endforeach
@endsection