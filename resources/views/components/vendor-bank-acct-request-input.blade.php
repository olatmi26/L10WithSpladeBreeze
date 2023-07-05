<div class="row">
    <div class="col-6 form-group mb-4">
        <input inputmode="numeric" maxlength="11" type="tel" pattern="[0-9]*" type="text" name="vendor_acctNo"
            id="vendor_acctNo" tabindex="5" autofocus
            class="form-control form-customer-input @error('vendor_acctNo') is-invalid @enderror" required
            value="{{ old('vendor_acctNo') }}"
            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
            placeholder="Account Number" minlength="10" autocomplete="off">
        @error('vendor_acctNo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <livewire:load-bank-selector />
    <div class="col-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's Account Name"
                aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">
                    <label class="custom-control-label lblsameasvendorName" for="sameAsvendor">Same as Vendor Name
                        <input name="sameAsvendor" type="checkbox" class="custom-form-control-sm"
                            id="sameAsvendor"></label>
                </span>
            </div>
        </div>
    </div>
</div>
@push('otherstyle')
<style type="text/css">
    .lblsameasvendorName.custom-control-label::before {
        display: none;
    }
</style>
@endpush
@push('otherscript')
<script>
    alert("ok")
</script>

@endpush
