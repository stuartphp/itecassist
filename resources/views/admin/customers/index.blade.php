@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">
<div class="row">
<div class="col-md-10">Customers @if (session()->get('company_name'))
( {{ session()->get('company_name') }} )
@endif</div>
<div class="col-md-2 text-end"><a href="/admin/customers/create">Create</a></div>
</div>
</div>
<div class="card-body">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Ref</th>
                <th>Company Name</th>
                <th>Contact Person</th>
                <th>Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->reference }}</td>
                <td><a href="/admin/customers/set/{{ $item->id }}">{{ $item->company_name  }}</a></td>
                <td>{{ $item->contact_person }}</td>
                <td>{{ $item->contact_number }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="card-footer"></div>
</div>
@endsection
