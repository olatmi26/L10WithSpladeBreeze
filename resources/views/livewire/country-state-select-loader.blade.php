<div class="col-md-12 form-group mb-4">
    <div class="col pl-0">
        <div class="form-row">
            <div class="col-md-6 form-group mb-4">
                <select name="country" wire:model='selectedCountry'
                    class="form-control country @error('country') is-invalid @enderror">
                    <option selected="">Choose vendor country</option>
                    {{ $countries }}
                    @foreach ($countries as $country)
                    <option @selected(collect(old('country'))->contains($country->id))
                        value="{{$country->id}}">{{ \Str::ucfirst($country->name)}} </option>
                    @endforeach
                </select>
                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            @if (!is_null($selectedCountry) && $states->isNotEmpty())
            <div class="col-md-6 form-group mb-4">
                <select wire:model='selectedState' name="vendorState"
                    class="form-control @error('vendorState') is-invalid @enderror">
                    <option selected="">Choose vendor state Branch..</option>
                    @foreach ($states as $state )
                    <option @selected(collect(old('vendorState'))->contains($state->id))
                        value={{$state->id}}>{{ \Str::ucfirst($state->name) }}</option>
                    @endforeach
                </select>
                @error('vendorState')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            @endif
        </div>
    </div>
</div>
@push('otherscript')
<script>
    $(".country").select2({
    placeholder: "Choose country of the Vendor / Enterprise..."
    , allowClear: true
    }).on('change', function(e) {
        @this.set('selectedCountry', e.target.value);
        // alert(e.target.value);
        // if (e.target.value == 'newReg') {
        Livewire.emit('updatedSelectedCountry', e.target.value);
    // }
    });
    /* // $(function() {
        $(".country").select2({
            placeholder: "Choose  country of the Vendor / Enterprise..."
            , allowClear: true
        }).on('change', function(e) {
            @this.set('country', e.target.value);
            // alert(e.target.value);
            // if (e.target.value == 'newReg') {
                Livewire.emit('countryChanged', e.target.value);
            // }
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
    // });
 */
</script>
@endpush
