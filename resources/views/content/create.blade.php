@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/vendor/codemirror/codemirror.css">
<script src="/vendor/codemirror/codemirror.js"></script>
@endsection
@section('content')
<form action="/admin/content" method="post">
@csrf

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class='col-6'><a href="/admin/content">Content</a> / Create</div>
            <div class='col-6 text-right'></div>
        </div>
    </div>
    <div class="card-body">
        @include('content.form')
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary btn-sm" type="submit">Save</button>
    </div>
</div>
</form>
@endsection
@section('scripts')
<script>
    var editor = CodeMirror.fromTextArea(contents, {
      lineNumbers: true
    });
  </script>
@endsection
