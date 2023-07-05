<div class="modal fade" id="addNewBankModal" tabindex="-1" role="dialog" aria-labelledby="addNewBankModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewBankModalTitle">Add New Bank to Application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="submit">
                    <input type="text" wire:model="name">
                    @error('name') <span class="error">{{ $message }}</span> @enderror

                    <input type="text" wire:model="email">
                    @error('email') <span class="error">{{ $message }}</span> @enderror

                    <button type="submit">Save Contact</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
