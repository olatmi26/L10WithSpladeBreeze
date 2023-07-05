@extends('layouts.frontend.base')
@section('title', 'Register | ')
@section('content')
<section class="site-section bg-light aos-init aos-animate" id="contact-section" data-aos="fade">
    <form action="{{ route('register') }}" method="POST" class="p-lg-5 bg-white">
        @csrf
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title site-color text-center">Create Profile</h5>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    @if($errors->any())
                                    <div class="alert alert-primary" role="alert">
                                        <ul class="unordered">
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="text-black" for="firstName">First Name</label>
                                    <input required value="{{ old('firstName') }}" autofocus name="firstName"
                                        type="text" id="firstName"
                                        class="form-control @error('firstName') is-invalid @enderror">
                                    @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" col-md-6 mb-4">
                                    <label class="text-black" for="lastName">Other Names</label>
                                    <input required value="{{ old('lastName') }}" name="lastName" type="text"
                                        id="lastName" class="form-control @error('lastName') is-invalid @enderror">
                                    @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" col-md-6 mb-4">
                                    <label class="text-black" for="phoneN0">Phone Number</label>
                                    <input required value="{{ old('phoneN0') }}" name="phoneN0" type="text" id="phoneN0"
                                        max-length="11" class="form-control @error('phoneN0') is-invalid @enderror">
                                    @error('phoneN0')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" col-md-6 mb-4">
                                    <label class="text-black" for="email">Email</label>
                                    <input required value="{{ old('email') }}" name="email" type="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="text-black" for="company">company</label>
                                    <select required name="company"
                                        class="form-control @error('company') is-invalid @enderror" id=" company">
                                        <option value="">Select company...</option>
                                        @foreach ($companies as $company)
                                        <option {{ (collect(old('company'))->contains($company->id)) ?
                                            'selected':'' }} value="{{ $company->id }}">{{ $company->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" col-md-6 mb-4">
                                    <label class="text-black" for="location">Location</label>
                                    <select required name="location"
                                        class="form-control @error('location') is-invalid @enderror" id=" location">
                                        <option value="">Select location...</option>
                                        @foreach ($locations as $location)
                                        <option {{ (collect(old('location'))->contains($location->id)) ? 'selected':''
                                            }}
                                            value="{{ $location->id }}">{{ $location->location }}</option>
                                        @endforeach
                                    </select>
                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" col-md-6 mb-4">
                                    <label class="text-black" for="department">Department</label>
                                    <select required name="department"
                                        class="form-control @error('department') is-invalid @enderror" id=" department">
                                        <option value="">Select Department...</option>
                                        @foreach ($departments as $dept)
                                        <option {{ (collect(old('department'))->contains($dept->id)) ? 'selected':'' }}
                                            value="{{ $dept->id }}">{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="text-black" for="designation">Designation</label>
                                    <select required name="designation"
                                        class="form-control @error('designation') is-invalid @enderror"
                                        id=" designation">
                                        <option value="">Select designation...</option>
                                        @foreach ($designations as $designation)
                                        <option {{ (collect(old('designation'))->contains($designation->id)) ?
                                            'selected':'' }} value="{{ $designation->id }}">{{ $designation->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="text-black" for="Password">Password</label>
                                    <input required name="password" type="password" id="Password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class=" col-md-6 mb-4">
                                    <label class="text-black" for="Password">Password</label>
                                    <input required name="password_confirmation" type="password"
                                        id="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" row form-group text-center">
                                <div class="col-md-6 mx-auto">
                                    <input type="submit" value="Create Profile"
                                        class="text-center btn btn-primary btn-md text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection