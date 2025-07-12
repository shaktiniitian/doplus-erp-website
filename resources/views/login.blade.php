@extends('layouts.app')

@section('content')

    <section id="contact" class="contact section">

        <div class="row">
            <div class="col-md-3 mx-auto  bg-light p-5">
                <div class="text-center fw-bolder fs-4 mb-5">LOG IN</div>
                @error('error')
                <div  class="text-danger pb-4">
                    {{ $message }}
                </div>
                    
                @enderror
          
                <form method="post" action="{{ url('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Login Type</label>
                        <select name="type" class="form-select">
                            <option value="">--Select--</option>
                            <option value="1" selected={{ old('type') }}>Distributor</option>
                            <option value="2" selected={{ old('type') }}>Academy</option>

                        </select>
                        @error('type')
                            <div class="text-danger fs-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                        <input type="text" maxlength="10" value="{{ old('mobile') }}" name="mobile" class="form-control">
                        @error('mobile')
                            <div class="text-danger fs-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" maxlength="10" name="password" class="form-control">
                        @error('password')
                            <div class="text-danger fs-6">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="d-flex mt-4">
                        <div>
                            <a href="" class="text-primary">Forgot Account Password?</a>
                        </div>

                        <div class="ms-auto"> <button type="submit" class="btn btn-primary text-right">Submit</button>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('signup') }}" class="btn btn-light">NEW REGISTRATION </a>
                    </div>

                </form>

            </div>
        </div>
    </section>

@endsection