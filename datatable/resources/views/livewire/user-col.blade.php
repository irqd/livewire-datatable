<tr x-data>
   <th>
      <div class="d-flex justify-content-between" wire:click="$parent.sortColumn('name')" x-on:click="$wire.set('sortedColumn', 'name')" style="cursor: pointer">
         Name
         @if($sortedColumn == 'name')
            @if($sortDirection == 'asc')
               <i class="fa-solid fa-sort-up"></i>
            @else
               <i class="fa-solid fa-sort-down"></i>
            @endif
         @else
            <i class="fa-solid fa-sort"></i>
         @endif
      </div>
   </th>
   <th>
      <div class="d-flex justify-content-between" wire:click="$parent.sortColumn('email')" x-on:click="$wire.set('sortedColumn', 'email')" style="cursor: pointer">
         Email
         @if($sortedColumn == 'email')
            @if($sortDirection == 'asc')
               <i class="fa-solid fa-sort-up"></i>
            @else
               <i class="fa-solid fa-sort-down"></i>
            @endif
         @else
            <i class="fa-solid fa-sort"></i>
         @endif
      </div>
   </th>
   <th>
      <div class="d-flex justify-content-between" wire:click="$parent.sortColumn('role_id')" x-on:click="$wire.set('sortedColumn', 'role_id')" style="cursor: pointer">
         Role
         @if($sortedColumn == 'role_id')
            @if($sortDirection == 'asc')
               <i class="fa-solid fa-sort-up"></i>
            @else
               <i class="fa-solid fa-sort-down"></i>
            @endif
         @else
            <i class="fa-solid fa-sort"></i>
         @endif
      </div>
   </th>
   <th>
      <div class="d-flex justify-content-between" wire:click="$parent.sortColumn('status')" x-on:click="$wire.set('sortedColumn', 'status')" style="cursor: pointer">
         Status
         @if($sortedColumn == 'status')
            @if($sortDirection == 'asc')
               <i class="fa-solid fa-sort-up"></i>
            @else
               <i class="fa-solid fa-sort-down"></i>
            @endif
         @else
            <i class="fa-solid fa-sort"></i>
         @endif
      </div>
   </th>
   <th>
      <div class="d-flex justify-content-between" wire:click="$parent.sortColumn('created_at')" x-on:click="$wire.set('sortedColumn', 'created_at')" style="cursor: pointer">
         Created at
         @if($sortedColumn == 'created_at')
            @if($sortDirection == 'asc')
               <i class="fa-solid fa-sort-up"></i>
            @else
               <i class="fa-solid fa-sort-down"></i>
            @endif
         @else
            <i class="fa-solid fa-sort"></i>
         @endif
      </div>
   </th>
   <th style="width: 0">Actions</th>
 </tr>
