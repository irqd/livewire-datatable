<div wire:ignore.self class="modal fade" id="create-user-modal" tabindex="-1" aria-labelledby="create-user-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="create-user-label">Create User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit="submit">
                <div class="modal-body">
                    <x-input-field 
                        label="Name" 
                        id="name"
                        name="form.name"
                        placeholder="Enter name"
                        wire:model="form.name"
                    />

                    <x-input-field 
                        label="Email" 
                        id="email"
                        name="form.email"
                        placeholder="Enter email"
                        wire:model="form.email"
                    />

                    <x-input-field 
                        label="Password" 
                        id="password"
                        name="form.password"
                        placeholder="Enter password"
                        wire:model="form.password"
                    />

                    <x-select-field 
                        label="Role" 
                        id="role"
                        name="form.role"
                        placeholder="Select role"
                        wire:model="form.role"
                        :options="$roles"
                    />

                    <x-switch-field 
                        label="Status" 
                        id="status"
                        name="form.status"
                        placeholder="Select status"
                        wire:model="form.status"
                    />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
