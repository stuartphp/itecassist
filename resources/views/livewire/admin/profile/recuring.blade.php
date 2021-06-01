<div>
 <div class="card mt-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">Recuring Invoice</div>
            <div class="col-md-2 text-end">
                {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#formModal">Create</a> --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Ref.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th class="text-centre">Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->product_reference }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->unit }}</td>
                    <td class="text-end">{{ number_format($item->amount,2) }}</td>
                    <td><select class="form-select form-select-sm" wire:change="loadModal($event.target.value, {{ $item->id }})" id="action_{{ $item->id }}" onchange="setTimeout(()=>{ $('#action_{{$item->id}}').val('');},1000)">
                        <option value="">Select</option>
                        <option value="edit">Edit</option>
                        <option value="delete">Delete</option>
                        </select></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer"></div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- <div class="modal fade" id="formModal" tabindex="-1" wire:ignore.self aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $modal_title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="@if($action=='delete') d-none @else d-block @endif">
            <div class="mb-3">
                <label for="product_id" class="form-label">Product</label>
                <select class="form-select form-select-sm" id="product_id" wire:model="product_id">
                    <option value="">Select</option>
                    @foreach ($products as $prod)
                    <option value="{{ $prod->id }}">{{ $prod->name }} ({{ $prod->retail_price }})</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="product_reference" class="form-label">Product Reference</label>
                <input type="text" class="form-control form-control-sm" wire:model="product_reference" >
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" wire:model="name" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control form-control-sm" wire:model="description" >
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" class="form-control form-control-sm" wire:model="unit" >
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" class="form-control form-control-sm" wire:model="amount" >
            </div>
        </div>
        @if($action=='delete')  Are you sure you want to delete this record? @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn {{ $modal_btn}} btn-sm" wire:click="recordAction">{{ $modal_btn_title }}</button>
        </div>
      </div>
    </div>
  </div> --}}
</div>
