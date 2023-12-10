<div class="w-100">
   <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Users Table</h4>
      <div>
         <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create-user-modal">Add New</button>
      </div>
   </div>

   <div class="row gx-1 mb-3">
      <livewire:user-stat label="Total Users" :value="$total_users"/>
      <livewire:user-stat label="Active Users" :value="$active_users"/>
      <livewire:user-stat label="Inactive Users" :value="$inactive_users"/>
   </div>

   <div class="card card-body mb-3">
      <div class="row gx-2">
         <livewire:filter-user label="Role Filter" :options="$role_options" wire:model.live="role"/>
         <livewire:filter-user label="Status Filter" :options="$status_options" wire:model.live="status"/>
      </div>
   </div>

   <div class="d-flex justify-content-between mb-2">
      <livewire:limit-user wire:model.live="limit" />
      <livewire:search-user wire:model.live.debounce.500ms="search" />
   </div>

   <table class="table table-bordered table-striped">
      <thead>
         <livewire:user-col />
      </thead>
      <tbody>
         @foreach($users as $user)
            <livewire:user-row :user="$user" :key="$user->id"/>
         @endforeach
      </tbody>
   </table>
   
   <div class="d-flex justify-content-between">
      <div class="d-flex">
         <span>
            Showing 
            {{ $users->firstItem() ?? 0 }} 
            to 
            {{ $users->lastItem() ?? 0 }} 
            of 
            {{ $users->total() }} 
            entries
         </span> 
      </div>
      
      <div>
         {{ $users->onEachSide(1)->links() }}
      </div>
   </div>

   <livewire:create-user />
   <livewire:edit-user />
</div>