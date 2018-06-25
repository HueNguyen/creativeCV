@extends('layouts.default')

@section('title', 'Admin')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 main-content">
            <div style="padding: 15px">
                <div class="col-md-8">
                    {{--base profile-info--}}
                    <profile></profile>
                    {{--education info--}}
                    <education></education>
                    {{--experience info--}}
                    <experience></experience>
                </div>
                <div class="col-md-4 pad-left-15">
                    <skill></skill>
                    <favorite></favorite>
                    <password></password>
                </div>
            </div>
        </div>
    </div>
@endsection