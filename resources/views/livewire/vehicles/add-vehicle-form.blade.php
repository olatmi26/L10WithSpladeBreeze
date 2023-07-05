<div class="container">
    <form>
        <div class="form-row">
            <div class="form-group col-12 col-sm-12 col-md-6">
                <label for="plateNo">Reg Plate N0#</label>
                <input type="text" wire:model="plateNo" class="form-control @error('plateNo') is-invalid @enderror"
                    id="plateNo" name="plateNo">
                @error('plateNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-12 col-sm-12 col-md-6">
                <label for="chassesNo">Chasses Number</label>
                <input type="text" wire:model="chassesNo" class="form-control @error('chassesNo') is-invalid @enderror"
                    id="chassesNo" name="chassesNo">
                @error('chassesNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-lg-6 col-sm-12 col-md-6 mt-4">
                <label for="vehicle_type_selected">Vehicle Model</label>
                <select wire:model="vehicle_type_selected"
                    class="form-control @error('vehicle_type_selected') is-invalid @enderror" id="vehicleTypes"
                    wire:change="openVehicleTypeModal" name="vehicle_type_selected">
                    <option value="" disabled selected="selected">Select a vehicle model</option>
                    @foreach($vehicleTypes as $vehicleType)
                    @if($vehicleType->id == $vehicle_type_selected) selected @endif
                    <option value="{{ $vehicleType->id }}">{{ $vehicleType->type }}</option>
                    @endforeach
                    <option value="add_new_type">Add new</option>
                </select>
                @error('vehicle_type_selected')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-sm-12 col-md-6 mt-4">
                <label for="vehicle_category_selected">Vehicle Usage Purpose</label>
                <select wire:model="vehicle_category_selected"
                    class="form-control @error('vehicle_category_selected') is-invalid @enderror"
                    id="vehicle_category_selected" wire:change="openVehicleCategoryModal"
                    name="vehicle_category_selected">
                    <option value="" disabled selected="selected">Select a vehicle purpose</option>
                    @foreach($categories as $category)
                    @if($category->id == $vehicle_category_selected) selected @endif
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                    <option value="add_new_category">Add New Category</option>
                </select>
                @error('vehicle_category_selected')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-sm-12 col-md-6 mt-4">
                {{-- <label for="color">Color</ </label> --}}
                    <div id="color-picker" wire:ignore>
                        <div id="color-display" style="height: 45px; width: 147px;"></div>
                        <input type="color" name="color" id="color-input" title="select the vehicle color">
                        <input type="hidden" wire:model="color"
                            class="form-control @error('color') is-invalid @enderror" id="picked-color">
                    </div>
                    @error('color')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <div class="form-group col-lg-6 col-sm-12 col-md-6 mx-auto mt-4">
                <button type="submit" wire:click.prevent="submit" class="btn btn-primary btn-block">Register
                    Vehicle</button>
            </div>
        </div>
    </form>
    <div class="modal fade amk right from-right" data-backdrop="static" data-keyboard="false" wire:ignore
        id="addNewVehiclTypeModal" tabindex="-1" aria-labelledby="addNewVehiclTypeModalLabel" aria-hidden="true">
        <div wire:ignore class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Vehicle Type</h5>
                    <button type="button" class="close" wire:click="$emit('closeModal')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="vType">Name</label>
                            <input type="text" wire:model.defer="vType" class="form-control" id="vType">
                            @error('vType')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <button type="button" class="btn btn-secondary"
                                        wire:click="$emit('closeModal')">Close</button>
                                </div>
                                <div class="col-8">
                                    <button type="button" class="btn btn-primary btn-block"
                                        wire:click="saveNewVType">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade amk right from-right" wire:ignore id="addNewVehiclCategoryModal" tabindex="-1"
        aria-labelledby="addNewVehiclCategoryLabel" aria-hidden="true">
        <div wire:ignore class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Vehicle Category</h5>
                    <button type="button" class="close" wire:click="$emit('closeModal')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="category">Vehicle Catgory</label>
                            <input type="text" wire:model.defer="category" class="form-control" id="category">
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <button type="button" class="btn btn-secondary"
                                        wire:click="$emit('closeModal')">Close</button>
                                </div>
                                <div class="col-8">
                                    <button type="button" class="btn btn-primary btn-block"
                                        wire:click="saveNewCategory">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('otherscript')
<script>
    const colorDisplay = document.getElementById('color-display');
    const colorInput = document.getElementById('color-input');
    const pickedColor = document.getElementById('picked-color');

    colorInput.addEventListener('change', function() {
        colorDisplay.style.backgroundColor = this.value;
        pickedColor.value = this.value;

        {{--  window.addEventListener('vehicleTypeJustAdded', e => {
            var select = document.getElementById('vehicleTypes');
            select.value= e.detail.vehicleType['id'];
            $('#addNewVehiclTypeModal').modal('hide');
        });  --}}
    });

    window.addEventListener('newVehicleTypeAdded', e => {
        {{--  alert(e.detail.id);  --}}
        let vehicle_Id = e.detail.id;
        let vehicleTypeName = e.detail.type;
        let select = document.getElementById('vehicleTypes');
        select.value = vehicle_Id;
        $('#addNewVehiclTypeModal').modal('hide').on('hidden.bs.modal', function(){
            select.selected = true;
        });
    });

    window.addEventListener('newVehicleCatAdded', e => {
        let vehicleCat = e.detail.id;
        let select = document.getElementById('vehicleCategory');
        select.value = vehicleCat;
        $('#addNewVehiclCategoryModal').modal('hide');
    });

    window.addEventListener("openVehicleTypeModal", e => {
        $('#addNewVehiclTypeModal').modal('show').on('shown.bs.modal', function() {
            $("#vType").focus();
        });
    });

    window.addEventListener("openVehicleCategoryModalForm", e => {
        $('#addNewVehiclCategoryModal').modal('show').on('shown.bs.modal', function() {
            $("#category").focus();
        });
    });

    window.addEventListener("closeVehicleCatModal", e => {
        $('#addNewVehiclCategoryModal').modal('hide');
    });

    window.addEventListener("closeVehicleTypeModal", e => {
        $('#addNewVehiclCategoryModal').modal('hide');
    });

    Livewire.on("closeModal", e => {
        $('#addNewVehiclTypeModal').modal('hide');
    });
</script>
@endpush
@push('otherstyle')
<style>
    .modal.amk .modal-header {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
        background-color: #272e48 !important;
        color: #fff;
    }

    .close span {
        color: #fff;
    }

    input#color-input {
        position: absolute;
        top: 8px;
        left: 10%;
        border: 0px transparent;
        background: transparent;
    }
</style>
@endpush
