<x-backend-base>
    @push('otherstyle')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }

        /*Background color*/
        #grad1 {
            background-color: : #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        .rounded .form-card {
            border-radius: 0.75rem;
        }

        #msform fieldset .form-card {
            background: white;
            /* border: 0 none; */
            /* border-radius: 0px; */
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            /* box-shadow: 0 1px 15px rgb(0 0 0 / 4%), 0 1px 6px rgb(0 0 0 / 4%); */
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            /* width: 94%; */
            /* margin: 0 2% 20px 2%; */

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        /* #msform input,
    #msform select,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px;
    } */

        #msform input:focus,
        #msform select:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            /* width: 100px; */
            /* background: skyblue; */
            font-weight: bold;
            color: white;
            border: 0 none;
            /* border-radius: 0px; */
            cursor: pointer;
            padding: 10px 5px;
            margin: 15px 5px;
            border-radius: 50px;
            outline: initial !important;
            box-shadow: none !important;
            box-shadow: initial !important;
            /* font-size: .8rem; */
            padding: 0.5rem 1.25rem 0.5rem 1.25rem;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 5px 5px;
            margin: 15px 25px;
            border-radius: 50px;
            outline: initial !important;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 18px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: "Font Awesome 5 Free";
            content: "\f2d0";
        }

        #progressbar #personal:before {
            font-family: "Font Awesome 5 Free";
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: "Font Awesome 5 Free";
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: "Font Awesome 5 Free";
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #3f51b5;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }
    </style>
    @endpush
    @section('breadcumTitle', 'Add New Bill To Track')
    @section('othermenulist')
    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
    <li class="breadcrumb-item active" aria-current="page">New Bill for Payment</li>
    @endsection
    {{-- @section('content') --}}
    {{-- @include('bill.form _data') --}}
    <x-new-vendor-modal-form />
    <div class="col-12 p-0 pt-3" id="container-wrapper">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary text-center"><strong>Add New Bill for
                        Payment</strong></h6>
            </div>
            <div class="card-body pt-0">
                <div class="row justify-content-center mt-0">
                    <div class="col-12 text-center">
                        <p>Fill all form field to go to next step</p>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form id="msform" method="POST">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Bill Details</strong></li>
                                        <li id="personal"><strong>Credit Receiver Details</strong></li>
                                        <li id="payment"><strong>Source Account</strong></li>
                                        <li id="confirm"><strong>Preview and Finish</strong></li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card rounded">
                                            <h2 class="fs-title mb-3">Bill Details</h2>
                                            <div class="form-row">
                                                <div class="col mb-4">
                                                    <input name="ApprovalId" type="text"
                                                        class="form-control text-uppercase"
                                                        placeholder="Request Approval ID">
                                                </div>
                                                <div class="col mb-4">
                                                    <select name="company_id" class="form-control" id="company_id">
                                                        <option selected value="">For which Company</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 mb-4">
                                                    <input name="purpose" type="text" class="form-control"
                                                        placeholder="Purpose of Payment">
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <select name="bill_category_id" class="form-control"
                                                        id="exampleFormControlSelect1">
                                                        <option selected value="">Bill Payment Classify as </option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <select name="bill_type_id" class="form-control"
                                                        id="exampleFormControlSelect1">
                                                        <option selected value="">Bill Type </option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="sr-only">Email address</label>
                                                <input name="totalAmountOnBill" type="text" class="form-control"
                                                    id="totalAmountOnBill" aria-describedby="emailHelp"
                                                    placeholder="Amount on Bill">
                                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never
                                                    share
                                                    your
                                                    email with anyone else.</small> --}}
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="input-group date">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-calendar"></i></span>
                                                        </div>
                                                        <input name="dateDue" type="text"
                                                            class="form-control input-group.date" id="dateDue"
                                                            placeholder="Date Due">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-group date">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-calendar"></i></span>
                                                        </div>
                                                        <input name="overdueDate" type="text"
                                                            class="form-control input-group.date" id="overdueDate"
                                                            placeholder="Date Overdue">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button btn btn-primary"
                                            value="Continue" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card rounded">
                                            <h2 class="fs-title mb-3"> Credit Receiver Account Information</h2>
                                            <div class="col-10 mx-auto">
                                                <div class="form-row">
                                                    <div class="col mb-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio3" name="whoToPay"
                                                                value="vendor" class="custom-control-input whoToPay">
                                                            <label class="custom-control-label"
                                                                for="customRadio3">Vendor
                                                                Payment</label>
                                                        </div>
                                                    </div>
                                                    <div class="col mb-4">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio4" name="whoToPay"
                                                                value="staff" class="custom-control-input whoToPay">
                                                            <label class="custom-control-label" for="customRadio4">Staff
                                                                Payment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 mb-4">
                                                    <div id="receiverVendorwrapper" class="d-none">
                                                        <label for="Sender" class="text-dark creditorLabel">
                                                        </label>
                                                        <select name="paymentReciever" id="vendorRecords"
                                                            class="paymentReciever form-control form-control-lg @error('sender') is-invalid @enderror">
                                                            <option value="New">Add new Vendor</option>
                                                            @forelse ($receivers as $receiver)
                                                            <option {{ (collect(old('sender'))->contains($receiver->id))
                                                                ?
                                                                'selected':''
                                                                }}
                                                                value="{{$receiver->id}}">{{$receiver->name}}<span
                                                                    class="ml-3">{{ '
                                                                    - '. $receiver->phoneN0}}</span>
                                                            </option>
                                                            @empty
                                                            <option value="noRecordFund" disabled>No Records of Vendors
                                                                Yet
                                                            </option>
                                                            @endforelse
                                                            <option selected="selected" value="">Select Reciever
                                                            </option>
                                                        </select>
                                                        @error('sender')
                                                        <span class="invalid-tooltip invalid-feedback" role="alert">
                                                            {{$message}}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div id="receiverStaffwrapper" class="d-none">
                                                        <label for="Sender" class="text-dark creditorLabel">
                                                        </label>
                                                        <select name="paymentReciever"
                                                            class="paymentReciever form-control form-control-lg @error('sender') is-invalid @enderror">
                                                            @forelse ($receivers as $receiver)
                                                            <option {{ (collect(old('sender'))->contains($receiver->id))
                                                                ?
                                                                'selected':''
                                                                }}
                                                                value="{{$receiver->id}}">{{$receiver->name}}<span
                                                                    class="ml-3">{{ '
                                                                    - '. $receiver->phoneN0}}</span>
                                                            </option>
                                                            @empty
                                                            <option value="noRecordFund" disabled>No Records of Vendors
                                                                Yet
                                                            </option>
                                                            @endforelse
                                                            <option selected="selected" value="">Select Reciever Account
                                                            </option>
                                                        </select>
                                                        @error('sender')
                                                        <span class="invalid-tooltip invalid-feedback" role="alert">
                                                            {{$message}}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="button" name="next" class="next action-button btn btn-primary"
                                            value="Continue" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card rounded">
                                            <h2 class="fs-title">Payment Information</h2>
                                            <div class="radio-group">
                                                <div class='radio' data-value="credit"><img
                                                        src="https://i.imgur.com/XzOzVHZ.jpg" width="200px"
                                                        height="100px">
                                                </div>
                                                <div class='radio' data-value="paypal"><img
                                                        src="https://i.imgur.com/jXjwZlj.jpg" width="200px"
                                                        height="100px">
                                                </div>
                                                <br>
                                            </div>
                                            <label class="pay">Card Holder Name*</label>
                                            <input type="text" name="holdername" placeholder="" />
                                            <div class="row">
                                                <div class="col-9">
                                                    <label class="pay">Card Number*</label>
                                                    <input type="text" name="cardno" placeholder="" />
                                                </div>
                                                <div class="col-3">
                                                    <label class="pay">CVC*</label>
                                                    <input type="password" name="cvcpwd" placeholder="***" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="pay">Expiry Date*</label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="list-dt" id="month" name="expmonth">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <select class="list-dt" id="year" name="expyear">
                                                        <option selected>Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="button" name="make_payment"
                                            class="next action-button btn btn-primary" value="Continue" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Success !</h2>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                        class="fit-image">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>You Have Successfully Signed Up</h5>
                                                </div>
                                            </div>

                                        </div>
                                        <input type="button" name="make_payment"
                                            class="next action-button btn btn-primary" value="Confirm and Save" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- @endsection --}}
    @push('otherscript')
    <script>
        $(document).ready(function(){
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        $(".next").click(function(){
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
            },
            duration: 600
            });
        });

        $(".previous").click(function(){
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 600
            });
        });

        $('.radio-group .radio').click(function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function(){
            return false;
        })

    });
    $('#dateDue, #overdueDate').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,
    });

    $(function() {
        $(".paymentReciever").select2({
            // theme: 'bootstrap4'
        });
    });
    $(function() {
        $(".paymentReciever").select2({
            placeholder: "Choose Reciever Account..."
            , allowClear: true
        }).on('change', function(e) {
            // alert(e.target.id);
            if (e.target.value == 'New') {
                $("#modalNewVendor").modal('show').on('shown.bs.modal', function(param) {
                if (e.target.id == 'vendorRecords') {
                    $("#modalNewVendorLabel").html('New Vendor Information Form');
                    $('input[name = "name"]').attr("placeholder", "Enter Vendor/Enterprise Name");
                    $('input[name = "vendor_email"]').attr("placeholder", "Enter Vendor/Enterprise valid email optional");
                    $('input[name = "phoneN0"]').attr("placeholder", "Enter Sender Phone number");
                    $('input[name = "address"]').attr("placeholder", "Enter Sender address");

                }
                //else if (e.target.id == 'receiver') {
                //     $("#modalNewCustomerLabel").html('New Reciever Logistics Customer');
                //     $('input[name = "fname"]').attr("placeholder", "enter receiver firstname");
                //     $('input[name = "lname"]').attr("placeholder", "receiver other name");
                //     $('input[name = "email"]').attr("placeholder", "receiver valid email (optional)");
                //     $('input[name = "phoneN0"]').attr("placeholder", "receiver phone number");
                //     $('input[name = "address"]').attr("placeholder", "Supply the receiver address");
                //     $('input[name = "startingpointEntry"]').val('receiver');
                // }
                });
                // $("#modal-new-customer-logistics").modal('show');
            }
            return;
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
    });
    $('.whoToPay').on('change', function() {
       var choosingval= $('input[name="whoToPay"]:checked').val();
        //    alert(choosingval);
       if(choosingval=='vendor'){
        $("#receiverVendorwrapper").removeClass('d-none');
        $("#receiverStaffwrapper").addClass('d-none');
        $(".creditorLabel").html('');
        $(".creditorLabel").html('Select Creditor details From Vendor Records  ');
       }
       else if(choosingval=='staff'){
        $("#receiverVendorwrapper").addClass('d-none');
        $("#receiverStaffwrapper").removeClass('d-none');
        $(".creditorLabel").html('');
        $(".creditorLabel").html('Select Creditor details From Staff Records ')
       }
    });
    </script>
    @endpush
</x-backend-base>
