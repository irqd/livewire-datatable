<tr>
   <td>
      <div class="form-check d-flex justify-content-center pt-1">
         <input type="checkbox" class="form-check-input">
      </div>
   </td>
   <td>{{ $user->name }}</td>
   <td>{{ $user->email }}</td>
   <td>{{ ucfirst($user->role->name) }}</td>
   <td>
      <div class="form-check form-switch d-flex justify-content-center">
         <input 
            class="form-check-input" 
            type="checkbox" 
            role="switch"
            wire:change="$parent.toggleStatus({{ $user->id }})"
            @if($user->status == 1) checked @endif>
      </div>
   </td>
   <td>{{ $user->created_at->diffForHumans() }}</td>
   <td>
      <div class="d-flex justify-content-between align-items-center gap-1">
         <button 
            class="btn btn-sm btn-primary" 
            data-bs-toggle="modal" 
            data-bs-target="#edit-user-modal"
            wire:click="$dispatch('get-user', { id: {{ $user->id }} })">Edit</button>
         <button 
            class="btn btn-sm btn-danger" 
            wire:click="$parent.deleteUser({{ $user->id }})"
            wire:confirm="Are you sure you want to delete this user?">Delete</button>
      </div>
   </td>
</tr>
