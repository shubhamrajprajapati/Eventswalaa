
  <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form wire:submit.prevent="storeBrand">
            <div class="modal-body">
                <div class="from-group">
                    <label for="">Brand Name</label>
                    <input type="text" wire:model.defer="name" class="form-control" required>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="from-group">
                    <label for="">Brand Slug</label>
                    <input type="text" wire:model.defer="slug" class="form-control" required>
                    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="from-group">
                    <label for="">Status</label>
                    <input type="checkbox" class="" wire:model.defer="status" > Checked = Hidden, Un-Checked = Visible
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </form>
      </div>
    </div>
  </div>