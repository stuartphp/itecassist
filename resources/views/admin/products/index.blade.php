@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">
    <div class="row">
        <div class="col-md-10">Products</div>
        <div class="col-md-2 text-end"><a href="/admin/products/create">Create</a></div>
    </div>

</div>
<div class="card-body">
<table class="table table-hover">
    <thead>
        <tr>
            <th>Ref.</th>
            <th>Name</th>
            <th>Unit</th>
            <th class="text-center">Retail Price</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->reference }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->unit }}</td>
        <td class="text-end">{{ number_format($item->retail_price,2) }}</td>
        <td class="text-end"><a href="/admin/products/{{ $item->id }}/edit">Edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="card-footer">
{{ $data->links() }}
</div>
</div>
@endsection
