@extends('layouts.backend.master-layout')
@section('content')
@section('othermenulist')
<li class="breadcrumb-item" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Bill for Payment Records</li>
@endsection
<div class="container-fluid px-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Payment Bills Records</h6>
                </div>
                <div class="table-responsive p-3">
                    <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table align-items-center table-flush table-hover dataTable"
                                    id="dataTableHover" role="grid">
                                    <thead class="thead-light">
                                        <tr role="row">
                                            <th>@lang('S/N0')</th>
                                            <th>@lang('Approval ID')</th>
                                            <th>@lang('Purpose')</th>
                                            <th>@lang('For Company')</th>
                                            <th>@lang('Bill Category')</th>
                                            <th>@lang('Receiver Name')</th>
                                            <th>@lang('Receiver Account')</th>
                                            <th>@lang('Receiver Bank')</th>
                                            <th>@lang('Debited From')</th>
                                            <th>@lang('Bill Amount')</th>
                                            <th>@lang('Amount Processed')</th>
                                            <th>@lang('Balance')</th>
                                            <th>@lang('Due date')</th>
                                            <th>@lang('overdue date')</th>
                                            <th>@lang('processed By')</th>
                                            <th>@lang('Status')</th>
                                            <th>@lang('Action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @forelse($bills as $bill)
                                        <tr>
                                            <td data-label="@lang('Serial')">{{ $loop->iteration }}<< /td>
                                            <td data-label="@lang('company_id')">{{ $bill->company_id }}</td>
                                            <td data-label="@lang('Bill Category')">{{ $bill->dept_id }}</td>
                                            <td data-label="@lang('Receiver Name')">{{ $bill->vendor_id }}</td>
                                            <td data-label="@lang('Receiver Account')">{{ $bill->vendor_id }}</td>
                                            <td data-label="@lang('Receiver Bank')">{{ $bill->vendor_id }}</td>
                                            <td data-label="@lang('Receiver Bank')">{{ $bill->vendor_id }}</td>
                                            <td data-label="@lang('bill_category_id')">{{ $bill->bill_category_id }}
                                            </td>
                                            <td data-label="@lang('bill_type_id')">{{ $bill->bill_type_id }}</td>
                                            <td data-label="@lang('paymentStatus')">{{ $bill->paymentStatus }}</td>
                                            <td data-label="@lang('dateDue')">{{ $bill->dateDue }}</td>
                                            <td data-label="@lang('Create')">{{ $bill->created_at }}</td>
                                            <td data-label="@lang('Action')"> </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-muted text-center" colspan="100%">{{ $empty_message }}</td>
                                        </tr>
                                        @endforelse --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection