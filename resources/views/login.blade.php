@extends('layouts.app')

@section('content')

    <section id="contact" class="contact section">

        <div class="row">
            <div class="col-md-4 mx-auto  bg-light p-5">


                <form>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Login Type</label>
                        <select id="disabledSelect" class="form-select">
                            <option>Distributor</option>
                            <option>Academy</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>


                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Forgot Password</label>
                        <label class="form-check-label" for="exampleCheck1">Sign Up</label>
                    </div>
                    <div class="col-md-12 text-end">
                        <div class="col">
                            Forgot Password
                        </div>
                        <div> <button type="submit" class="btn btn-primary text-right">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>

@endsection