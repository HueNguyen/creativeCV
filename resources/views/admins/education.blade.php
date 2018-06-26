@extends('layouts.default')

@section('title', 'Education')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 main-content">
            <div style="padding: 15px">
                <div class="col-md-8">
                    <education-manage></education-manage>
                </div>
                <div class="col-md-4 pad-left-15">
                    <education-library></education-library>
                </div>

            </div>
        </div>
    </div>
@endsection