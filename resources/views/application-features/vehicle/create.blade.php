<x-backend-base>
    @section('breadcumTitle', 'Add New Vehicle Details')
    <div class="col-12 p-0 pt-3" id="container-wrapper">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary text-center"><strong>Add Vehicle to System</strong></h6>
            </div>
            <div class="card-body pt-0">
                <div class="row justify-content-center mt-0">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <livewire:vehicles.add-vehicle-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend-base>
