<div class="mt-3">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Action Date</th>
                        <th>Due Date</th>
                        <th>Amount</th>
                        <th>Is Paid</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr @if($item->is_paid==0) class="text-danger" @endif>
                            <td>{{ $item->reference }}</td>
                            <td>{{ $item->action_date }}</td>
                            <td>{{ $item->due_date }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ ($item->is_paid==0) ? 'No':'Yes' }}</td>
                            {{-- <td><select class="form-select form-select-sm" wire:change="loadModal($event.target.value, {{ $item->id }})" id="action_{{ $item->id }}" onchange="setTimeout(()=>{ $('#action_{{$item->id}}').val('');},1000)">
                                <option value="">Select</option>
                                <option value="edit">Edit</option>
                                <option value="delete">Delete</option>
                                </select>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="formModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ $modal_title }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="@if($action=='delete') d-none @else d-block @endif">
                <div class="mb-3">
                    <label for="reference" class="form-label">Reference</label>
                    <input type="text" class="form-control form-control-sm" wire:model="reference" >
                </div>
                <div class="mb-3">
                    <label for="action_date" class="form-label">Action Date</label>
                    <input type="date" class="form-control form-control-sm" wire:model="action_date" >
                </div>
                <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" class="form-control form-control-sm" wire:model="due_date" >
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" class="form-control form-control-sm" wire:model="amount" >
                </div>
                <div class="mb-3">
                    <label for="is_paid" class="form-label">Is Paid</label>
                    <select class="form-select form-select-sm" wire:model="is_paid">
                        <option value="">Select</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
            </div>
            @if($action=='delete')  Are you sure you want to delete this record? @endif
            </div>
            <div class="modal-footer">
              <button type="button" class="btn {{ $modal_btn}} btn-sm" wire:click="recordAction">{{ $modal_btn_title }}</button>
            </div>
          </div>
        </div>
      </div>
</div>
