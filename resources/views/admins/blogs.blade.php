@extends('layouts.default')

@section('title', 'Blogs')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 main-content">
            <div style="padding: 15px">
                <blog-manage></blog-manage>
            </div>
        </div>
    </div>
@endsection