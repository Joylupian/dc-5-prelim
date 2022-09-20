<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Todos</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Todo Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='task'>
             <label for="task">task</label>
             @error('task')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='hrs'>
            <label for="hrs">hrs</label>
            @error('hrs')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addTodo()'>
                 Add Todo
             </button>
          </div>
     </div>
    </div>
 </div>
