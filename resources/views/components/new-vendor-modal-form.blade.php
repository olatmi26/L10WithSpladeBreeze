<div class="row">
    {{-- {{ }} --}}
    <div class="col">
        <div class="modal fade" id="modalNewVendor" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="modalNewVendorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-cast text-white">
                        <h5 class="modal-title text-info " id="modalNewVendorLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body divide" id="modal_body">
                        <form method="POST" action="{{ route('vendor.store') }}" class="col needs-validation g-3"
                            novalidate autocomplete="off" id="new_vendor_form">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-12 form-group mb-4">
                                    <input type="text" id="vendore_name" name="vendore_name"
                                        class="form-control form-control-lg @error('vendore_name') is-invalid @enderror"
                                        placeholder="Name of Enterprise/vendor" required
                                        value="{{old('vendore_name')}}">
                                    @error('vendore_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <input inputmode="numeric" maxlength="11" type="tel" pattern="[0-9]*" type="text"
                                        name="vendor_phone" id="vendor_phone" tabindex="5" autofocus
                                        class="form-control form-customer-input @error('vendor_phone') is-invalid @enderror"
                                        required value="{{ old('vendor_phone') }}"
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                        placeholder="vendor phone number" maxlength="16" minlength="11"
                                        autocomplete="off">
                                    @error('vendor_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <textarea name="vendor_address"
                                        class="form-control @error('vendor_address') is-invalid @enderror"
                                        id="vendor_address" rows="2" placeholder="vendor address"
                                        value="{{old('vendor_address')}}"></textarea>
                                    @error('vendor_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <livewire:country-state-select-loader>
                            </div>

                            <x-vendor-bank-acct-request-input />

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary btnClose" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btnSaveNewCustomer">Save Customer Details</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
