@extends('layouts.app')

@section('content')

    <section id="contact" class="contact section">

        <div class="row">
            <div class="col-md-5 mx-auto  bg-light p-5">


                <form action="{{ url('register') }}" method="post">
                    @csrf
                    <div class="text-center fw-bolder fs-4 mb-5">NEW REGISTRATION FORM</div>

                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif


                    <div class="row col-md-12">

                        <div class="mb-3 col-6">
                            <label class="form-label">Register Type</label>
                            <select name="type" class="form-select">
                                <option value="1" selected={{ old('type') }}>Distributor</option>
                                <option value="2" selected={{ old('type') }}>Academy</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Company Name</label>
                            <input type="text" name="company" value="{{ old('company') }}" class="form-control text-capitalize" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('company')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Contact Person</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control text-capitalize" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" maxlength="10" value="{{ old('mobile') }}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
     
      
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">City</label>
                            <input type="text" name="city" class="form-control text-capitalize" value="{{ old('city') }}"  id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            --}}
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">State</label>
                            <input type="text" name="state" class="form-control text-capitalize" value="{{ old('state') }}" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            --}}
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Country</label>
                            <input type="text" name="county" class="form-control text-capitalize" value="{{ old('country') }}"
                                aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            --}}
                        </div>
                        <div class="mb-3 col-12">
                            <label for="exampleInputEmail1" class="form-label">Adddress</label>
                            <textarea name="address" class="form-control text-capitalize" id="exampleInputEmail1"
                                aria-describedby="emailHelp">{{ old('address') }}</textarea>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label for="exampleInputEmail1" class="form-label">Website</label>
                            <input type="url" name="website" value="{{ old('website') }}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            --}}
                        </div>
                    </div>

                    <div class="d-flex mt-4">

                        <div class="ms-auto"> <button type="submit" class="btn btn-primary text-right">Submit</button>
                        </div>
                    </div>



                </form>

            </div>
        </div>
    </section>

@endsection