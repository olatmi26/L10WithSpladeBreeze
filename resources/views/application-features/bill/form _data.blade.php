<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your
                                email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Form Sizing -->
            <div class="card mb-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sizing</h6>
                </div>
                <div class="card-body">
                    <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code
                            class="highlighter-rouge">.form-control-sm</code>.</p>
                    <p>Example for form general</p>
                    <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
                    <input class="form-control  mb-3" type="text" placeholder="Default input">
                    <input class="form-control form-control-sm  mb-3" type="text" placeholder=".form-control-sm">
                    <p>Example for Select</p>
                    <select class="form-control form-control-lg  mb-3">
                        <option>Large select</option>
                    </select>
                    <select class="form-control mb-3">
                        <option>Default select</option>
                    </select>
                    <select class="form-control form-control-sm mb-3">
                        <option>Small select</option>
                    </select>
                </div>
            </div>

            <!-- Horizontal Form -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Horizontal Form</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">First Radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Second Radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="radioDisabled" id="customRadioDisabled1"
                                            class="custom-control-input" disabled="">
                                        <label class="custom-control-label" for="customRadioDisabled1">Third Radio
                                            Disabled</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-sm-3">Checkbox</div>
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Check this custom
                                        checkbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- General Element -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">General Element</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Example multiple select</label>
                            <select multiple="" class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlReadonly">Readonly</label>
                            <input class="form-control" type="text" placeholder="Readonly input here..."
                                id="exampleFormControlReadonly" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="validationServer01">Input with Success</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"
                                placeholder="Input with Success" value="Mark" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validationServer03">Input with Error</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03"
                                placeholder="Input with Error" required="">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Checkbox</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Check this custom checkbox
                                    1</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Check this custom checkbox
                                    2</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheckDisabled1"
                                    disabled="">
                                <label class="custom-control-label" for="customCheckDisabled1">Check this custom
                                    checkbox</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Radio Button</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio4">Or toggle this other custom
                                    radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="radioDisabled" id="customRadioDisabled2"
                                    class="custom-control-input" disabled="">
                                <label class="custom-control-label" for="customRadioDisabled2">Toggle this custom
                                    radio</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Switches</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Toggle this switch
                                    element</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Input Group -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Input Group</h6>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                    </div>
                    <label for="basic-url">Your vanity URL</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->

    <!-- Documentation Link -->
    <div class="row">
        <div class="col-lg-12 text-center">
            <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                    target="_blank">
                    bootstrap forms documentations.</a> and <a
                    href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                    groups documentations</a></p>
        </div>
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Advanceds</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active" aria-current="page">Form Advanceds</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Select2 -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Select2</h6>
                </div>
                <div class="card-body">
                    <p>Select2 is a jQuery based replacement for select boxes</p>
                    <div class="form-group">
                        <label for="select2Single">Single Select Box</label>
                        <select class="select2-single form-control" name="state" id="select2Single">
                            <option value="">Select</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatra Utara">Sumatra Utara</option>
                            <option value="Sumatra Barat">Sumatra Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung
                            </option>
                            <option value="Lampung">Lampung</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Jawa TImur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawaesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                        </select>
                    </div>
                    <p>For documentations Select2 you can visit <a href="https://select2.org/" target="_blank">here.</a>
                    </p>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Date Picker</h6>
                </div>
                <div class="card-body">
                    <p>Simple and easy select a time for a text input using your mouse.</p>
                    <div class="form-group" id="simple-date1">
                        <label for="simpleDataInput">Simple Data Input</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date2">
                        <label for="oneYearView">One Year View</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="oneYearView">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date3">
                        <label for="decadeView">Decade View</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="decadeView">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date4">
                        <label for="dateRangePicker">Range Select</label>
                        <div class="input-daterange input-group">
                            <input type="text" class="input-sm form-control" name="start">
                            <div class="input-group-prepend">
                                <span class="input-group-text">to</span>
                            </div>
                            <input type="text" class="input-sm form-control" name="end">
                        </div>
                    </div>
                    <p>For documentations Bootstrap Datepicker you can visit <a
                            href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">here.</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->

    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">TouchSpin</h6>
                </div>
                <div class="card-body">
                    <p>A mobile and touch friendly input spinner component for Bootstrap 3. It supports the mousewheel
                        and the up/down keys.</p>
                    <div class="form-group">
                        <label for="touchSpin1">Simpel TouchSpin</label>
                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                class="input-group-btn input-group-prepend"><button
                                    class="btn btn-primary bootstrap-touchspin-down"
                                    type="button">-</button></span><input id="touchSpin1" type="text"
                                class="form-control"><span class="input-group-btn input-group-append"><button
                                    class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                    </div>
                    <div class="form-group">
                        <label for="touchSpin2">TouchSpin with Prefix</label>
                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                class="input-group-btn input-group-prepend"><button
                                    class="btn btn-primary bootstrap-touchspin-down"
                                    type="button">-</button></span><input id="touchSpin2" type="text"
                                class="form-control"><span
                                class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span
                                    class="input-group-text">%</span></span><span
                                class="input-group-btn input-group-append"><button
                                    class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                    </div>
                    <div class="form-group">
                        <label for="touchSpin3">TouchSpin with Vertical Button</label>
                        <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input
                                id="touchSpin3" type="text" class="form-control"><span
                                class="input-group-btn-vertical"><button class="btn btn-primary bootstrap-touchspin-up "
                                    type="button">+</button><button class="btn btn-primary bootstrap-touchspin-down "
                                    type="button">-</button></span></div>
                    </div>
                    <p>For documentations TouchSpin you can visit <a
                            href="https://github.com/istvan-ujjmeszaros/bootstrap-touchspin" target="_blank">here.</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">ClockPicker</h6>
                </div>
                <div class="card-body">
                    <p>A clock-style timepicker for Bootstrap (or jQuery).</p>
                    <div class="form-group">
                        <label for="clockPicker1">Simple ClockPicker</label>
                        <div class="input-group clockpicker" id="clockPicker1">
                            <input type="text" class="form-control" value="06:30">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="clockPicker2">Simple ClockPicker with Auto Close</label>
                        <div class="input-group clockpicker" id="clockPicker2">
                            <input type="text" class="form-control" value="12:30">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="clockPicker2">ClockPicker with Auto Check Minutes</label>
                        <div class="input-group" id="clockPicker3">
                            <input class="form-control" placeholder="Now" value="">
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="check-minutes">Check the Minutes</button>
                            </div>
                        </div>
                    </div>
                    <p>For documentations Clockpicker you can visit <a href="http://weareoutman.github.io/clockpicker/"
                            target="_blank">here.</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('otherscript')
<script>
    $(document).ready(function () {


          $('.select2-single').select2();

          // Select2 Single  with Placeholder
          $('.select2-single-placeholder').select2({
            placeholder: "Select a Province",
            allowClear: true
          });

          // Select2 Multiple
          $('.select2-multiple').select2();

          // Bootstrap Date Picker
          $('#simple-date1 .input-group.date').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: 'linked',
            todayHighlight: true,
            autoclose: true,
          });

          $('#simple-date2 .input-group.date').datepicker({
            startView: 1,
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          $('#simple-date3 .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          $('#simple-date4 .input-daterange').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true,
            todayBtn: 'linked',
          });

          // TouchSpin

          $('#touchSpin1').TouchSpin({
            min: 0,
            max: 100,
            boostat: 5,
            maxboostedstep: 10,
            initval: 0
          });

          $('#touchSpin2').TouchSpin({
            min:0,
            max: 100,
            decimals: 2,
            step: 0.1,
            postfix: '%',
            initval: 0,
            boostat: 5,
            maxboostedstep: 10
          });

          $('#touchSpin3').TouchSpin({
            min: 0,
            max: 100,
            initval: 0,
            boostat: 5,
            maxboostedstep: 10,
            verticalbuttons: true,
          });

          $('#clockPicker1').clockpicker({
            donetext: 'Done'
          });

          $('#clockPicker2').clockpicker({
            autoclose: true
          });

          let input = $('#clockPicker3').clockpicker({
            autoclose: true,
            'default': 'now',
            placement: 'top',
            align: 'left',
          });

          $('#check-minutes').click(function(e){
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
          });

        });
</script>

@endpush
