<div class="col-6">
    <div class="form-group mb-4">
        <select wire:model="selectedBank" name="bank" class="form-control @error('bank') is-invalid @enderror">
            <option selected="">Choose Bank..</option>
            @foreach ($banks as $bank )
            <option @selected(collect(old('bank'))->contains($bank->id))
                value={{$bank->id}}>{{ \Str::ucfirst($bank->name) }}</option>
            @endforeach
            <option value="new">Add new Bank</option>
        </select>
        @error('bank')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


@push('otherscript')
<script>
    window.addEventListener('showAddNewBankModal', event => {
    alert('show AddNew Bank Modal: ' + event.detail.bank);
})
</script>
@endpush
