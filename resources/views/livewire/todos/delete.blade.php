<div>
    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Are you sure to delete it?</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>
                        Name:
                    </th>
                    <td>
                        {{ $this->todo->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Task:
                    </th>
                    <td>
                        {{ $this->todo->task }}
                    </td>
                </tr>

                <tr>
                    <th>
                        Hrs:
                    </th>
                    <td>
                        {{ $this->todo->hrs }}
                    </td>
                </tr>

            </table>
            <div class="d-flex justify-content-end">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
