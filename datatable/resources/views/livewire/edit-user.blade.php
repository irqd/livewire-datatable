<div
    x-data="$refs.edit_modal.addEventListener('hidden.bs.modal', () => $wire.resetForm())"
    x-on:user-updated="
        bootstrap.Modal.getInstance($refs.edit_modal).hide();

        $dispatch('dispatch-toast', {
            type: 'warning',
            message: 'User updated successfully!'
        });
    "
>
    <div wire:ignore.self class="modal fade" id="edit-user-modal" tabindex="-1" aria-labelledby="edit-user-label" aria-hidden="true" x-ref="edit_modal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="create-user-label">Update User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="submit">
                    <div class="modal-body">
                        <x-input-field 
                            label="Name" 
                            id="edit_name"
                            name="form.name"
                            placeholder="Enter name"
                            wire:model="form.name"
                        />
    
                        <x-input-field 
                            label="Email" 
                            id="edit_email"
                            type="email"
                            name="form.email"
                            placeholder="Enter email"
                            wire:model="form.email"
                        />
    
                        <x-input-field 
                            label="Password" 
                            id="edit_password"
                            type="password"
                            name="form.password"
                            placeholder="Enter password"
                            wire:model="form.password"
                        />
    
                        <x-select-field 
                            label="Role" 
                            id="edit_role"
                            name="form.role"
                            placeholder="Select role"
                            wire:model="form.role"
                            :options="$roles"
                        />

                        <x-switch-field 
                            label="Status" 
                            id="edit_status"
                            name="form.status"
                            placeholder="Select status"
                            wire:model="form.status"
                        />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

