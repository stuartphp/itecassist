@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">Images</div>
            <div class="col-6 text-right"><a href="/admin/images/create">Upload</a></div>
        </div>
        </div>
    <div class="card-body">
        <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>File</th>
                <th>Width</th>
                <th>Hight</th>
                <th>Size</th>
                <th>Ext.</th>
                <th>Img</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>{{ $image->name }}</td>
                    <td>{{ $image->file }}</td>
                    <td>{{ $image->width }}</td>
                    <td>{{ $image->height }}</td>
                    <td>{{ $image->size }}</td>
                    <td>{{ $image->ext }}</td>
                    <td class="col-2 text-right"><img src="/images/{{ $image->file }}" height="70px"/></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="card-footer">{{ $images->links() }}</div>
</div>
@endsection
