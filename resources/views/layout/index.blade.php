@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">Layouts</div>
            <div class="col-6 text-right"><a href="/admin/layouts/create">Create</a></div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layouts as $layout)
                    <tr>
                        <td>{{ $layout->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

