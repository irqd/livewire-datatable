<div class="w-100">
   <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Users Table</h4>
      <div>
         <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create-user-modal">Add New</button>
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
      <div class="d-flex gap-1 align-items-center">
         Show
         <select class="form-select form-select-sm">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
         </select>
         entries
      </div>

      <div class="d-flex gap-1">
         <input type="text" wire:model="search" class="form-control form-control-sm" placeholder="Search...">
      </div>
   </div>

   <table class="table table-bordered table-striped">
      <thead>
         <tr>
            <th colspan="7">
               Bulk Action:
               <button class="btn btn-sm btn-danger">
                  Delete Selected
               </button>
            </th>
         </tr>
         <tr>
            <th>
               <div class="form-check d-flex justify-content-center pt-1">
                  <input type="checkbox" class="form-check-input">
               </div>
            </th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th style="width: 0">Actions</th>
         </tr>
      </thead>
      <tbody>
         @foreach($users as $user)
               <livewire:user-row :user="$user" :key="$user->id" />
         @endforeach
      </tbody>
   </table>
   
   <div class="d-flex justify-content-between">
      <div class="d-flex">
         <span>Showing 1 to 5 of 5 entries</span>
      </div>
      
      <div>
         {{ $users->links() }}
      </div>
   </div>

   <livewire:create-user />
   <livewire:edit-user />
</div>