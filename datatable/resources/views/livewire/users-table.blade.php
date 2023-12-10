<div class="w-100">
   <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Users Table</h4>
      <div>
         <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create-user-modal">Add New</button>
      </div>
   </div>

   <div class="row gx-1 mb-3">
      <div class="col-md-3">
         <div class="card card-body">
            Total Users
         </div>
      </div>
      <div class="col-md-3">
         <div class="card card-body">
            Active
         </div>
      </div>
      <div class="col-md-3">
         <div class="card card-body">
            Inactive
         </div>
      </div>
      <div class="col-md-3">
         <div class="card card-body">
            Roles
         </div>
      </div>
   </div>

   <div class="card card-body mb-3">
      <div class="row gx-2">
         <div class="col-md-3">
            <label class="form-label fw-bold">Role Filter</label>
            <select class="form-select form-select-sm">
               <option disabled>Role Filter</option>
               <option value="0" selected>All</option>
               <option value="1">Admin</option>
               <option value="2">User</option>
               <option value="3">Guest</option>
            </select>
         </div>

         <div class="col-md-3">
            <label class="form-label fw-bold">Status Filter</label>
            <select class="form-select form-select-sm">
               <option disabled>Status Filter</option>
               <option value="all" selected>All</option>
               <option value="active">Active</option>
               <option value="inactive">inactive</option>
            </select>
         </div>
      </div>
   </div>

   <div class="d-flex justify-content-between mb-2">
      <livewire:limit-user wire:model.live="limit" />
      <livewire:search-user wire:model.live.debounce.500ms="search" />
   </div>

   <table class="table table-bordered table-striped">
      <thead>
         <livewire:user-bulk-action />
         <livewire:user-col />
      </thead>
      <tbody>
         @foreach($users as $user)
            <livewire:user-row :user="$user" :key="$user->id" />
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