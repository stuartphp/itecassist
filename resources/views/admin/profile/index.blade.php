@extends('layouts.app')
@section('content')
<h5>{{ session()->get('company_name') }}</h5>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Account History</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="recurring-tab" data-bs-toggle="tab" data-bs-target="#recurring" type="button" role="tab" aria-controls="recurring" aria-selected="false">Recurring</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="temail-tab" data-bs-toggle="tab" data-bs-target="#temail" type="button" role="tab" aria-controls="temail" aria-selected="false">Email Accounts</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="invoice-tab" data-bs-toggle="tab" data-bs-target="#invoice" type="button" role="tab" aria-controls="invoice" aria-selected="false">Invoices</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    @livewire('admin.profile.info')
  </div>
  <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
    @livewire('admin.profile.account')
  </div>
  <div class="tab-pane fade" id="recurring" role="tabpanel" aria-labelledby="recurring-tab">
      @livewire('admin.profile.recuring')</div>
  <div class="tab-pane fade" id="temail" role="tabpanel" aria-labelledby="temail-tab">
    @livewire('admin.profile.email')
  </div>
  <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
    @livewire('admin.profile.invoice')
  </div>
</div>
@endsection
