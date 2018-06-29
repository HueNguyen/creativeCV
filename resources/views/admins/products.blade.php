@extends('layouts.default')

@section('title', 'Products')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 main-content">
            <div style="padding: 15px">
                <product-manage></product-manage>
            </div>
        </div>
    </div>
@endsection