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

        <div class="d-grid mt-4">
            <a
                class=""
                href="/inventory">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3>Inventory</h3>
                        <div>Item registered to be sold</div>
                    </div>
                </div>
            </a>

            <a
                class=""
                href="/inventory">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3>Customers</h3>
                        <div>List of customer registered</div>
                    </div>
                </div>
            </a>

            <a
                class=""
                href="/sales">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3>Sales</h3>
                        <div>List of sales reports</div>
                    </div>
                </div>
            </a>

            <a
                class=""
                href="/sales">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3>Setup</h3>
                        <div>Your profile preferences</div>
                    </div>
                </div>
            </a>

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