<div class="card mt-3">
    <div class="card-header">
        Profile Information
    </div>

<div class="card-body">
    <form wire:submit.prevent="saveForm">
        <div class="mb-3">
            <label for="reference" class="form-label">References</label>
            <input type="text" class="form-control form-control-sm" wire:model="reference" id="reference">
            @error('reference') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" class="form-control form-control-sm" wire:model="company_name" id="company_name">
            @error('company_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control form-control-sm" wire:model="address" id="address" rows="5"></textarea>
            @error('address') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="contact_person" class="form-label">Contact Person</label>
            <input type="text" class="form-control form-control-sm" wire:model="contact_person" id="contact_person">
            @error('contact_person') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control form-control-sm" wire:model="contact_number" id="contact_number">
            @error('contact_number') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-sm" wire:model="email" id="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control form-control-sm" wire:model="password" id="password">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="is_active" class="form-label">Is Active</label>
            <select class="form-select form-select-sm" wire:model="is_active">
                <option value="">Select</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>

    </form>
</div>

</div>
