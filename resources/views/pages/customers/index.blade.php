@extends('layout.template')

@section('header')
@include('layout.common_header', ['menu' => $menu])
@endsection

@section('content')
<div class="container-page">
    <div class="card">
        <div class="card-body">

        </div>
    </div>
</div>

@foreach($items as $item)
<div class="card mt-2">
    <div class="card-body">
        <div class="row">
            <div class="col-10">
                <div class='text-main'></div>
                <div class='text-sub'></div>
</div>
<div class="col-2 text-center">
    <div class="text-bignumber">{{ $item->quantity}}</div>
</div>
        </div>
        
    </div>
</div>
@endforeach
@endsection