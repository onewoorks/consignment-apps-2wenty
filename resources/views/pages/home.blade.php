@extends('layout.template')

@section('header')

@endsection
<div style="height:290px; background-color: orange; ">&nbsp;</div>

@section('content')
    <div class="container" style="margin-top: -50px;">
        <div class="card">
            <div class="card-body text-center">
                <h1>CONSIGNMENT APPS DEVELOPMENT</h1>
            </div>
        </div>

        <div class="d-grid mt-4 mb-4">
            @foreach($menu as $m)
                @if(strtolower($m['title']) != 'home')
                    <a
                        class=""
                        href="/inventory">
                        <div class="card mt-2">
                            <div class="card-body">
                                <h3>{{ $m['title'] }}</h3>
                                <div>{{ $m['description'] }}</div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach

            <a
            class=""
            href="my.bluetoothprint.scheme://https://consignment-apps.onewoorks-solutions.com/resit/sales/1">
            <div class="card mt-2">
            <div class="card-body">
                <h3>Test Print</h3>
                <div>Testing print to connected bluetooth printer</div>
            </div>
        </div>
        </a>
        </div>
    </div>
@endsection