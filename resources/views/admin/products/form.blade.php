@extends('layouts.app')
@section('content')
<form action="/admin/products{{ isset($data->id) ? '/'.$data->id : '' }}" method="POST">
@csrf
@if (isset($data->id))
<input type="hidden" name="_method" value="PUT"/>
@endif
<div class="card">
    <div class="card-header"><a href="/admin/products">Product</a> {{ isset($data->id) ? 'Edit' : 'Create'}}</div>
    <div class="card-body">
        <div class="mb-3">
            <label for="reference" class="form-label">Reference</label>
            <input type="text" class="form-control form-control-sm" id="reference" value="{{ isset($data->reference) ? $data->reference : old('reference')}}">
            @error('reference')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control form-control-sm" id="name" value="{{ isset($data->name) ? $data->name : old('name')}}">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control form-control-sm" id="description" rows="6">{!! isset($data->description) ? $data->description : old('description') !!}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" class="form-control form-control-sm" id="unit" value="{{ isset($data->unit) ? $data->unit : old('unit')}}">
            @error('unit')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="retail_price" class="form-label">Retail Price</label>
            <input type="text" class="form-control form-control-sm" id="retail_price" value="{{ isset($data->retail_price) ? $data->retail_price : old('retail_price')}}">
            @error('retail_price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="card-footer">
        <div class="text-end">
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
    </div>
</div>

</form>
@endsection
