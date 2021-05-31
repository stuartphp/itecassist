@extends('layouts.app')
@section('content')
<form action="/admin/customers" method="POST">
@csrf
<div class="card">
<div class="card-header"><a href="/admin/customers">Customers</a> Create</div>
<div class="card-body">
<div class="mb-3">
            <label for="reference" class="form-label">References</label>
            <input type="text" class="form-control" name="reference" id="reference">
            @error('reference') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" class="form-control" name="company_name" id="company_name">
            @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="address" rows="5"></textarea>
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="contact_person" class="form-label">Contact Person</label>
            <input type="text" class="form-control" name="contact_person" id="contact_person">
            @error('contact_person') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="contact_number" id="contact_number">
            @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
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
