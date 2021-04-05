@extends('layouts.app')
@section('content')
<form action="/images" method="POST">
@csrf
<div class="card">
    <div class="card-header">
        Upload
    </div>
    <div class="card-body">
        @include('images.form')
    </div>
    <div class="card-footer">
        
        <button type="button" class="btn btn-primary btn-sm">Upload</button>
    </div>
</div>


</form>
@endsection

