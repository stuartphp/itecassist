@extends('layouts.app')
@section('content')
<h4>{{ session()->get('company_name') }}</h4>
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
    <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false">Email Accounts</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    @livewire('admin.profile.info')
  </div>
  <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
    @livewire('admin.profile.account')
  </div>
  <div class="tab-pane fade" id="recurring" role="tabpanel" aria-labelledby="recurring-tab">..rrr.</div>
  <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">..rrr.</div>
</div>
@endsection
