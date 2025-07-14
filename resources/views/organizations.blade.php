@extends('layouts.app')

@section('content')

    <section id="contact" class="contact section">
        <div class="row">

            <div class="col-md-10 mx-auto  bg-light p-5">
                <div class=" text-end mb-4">
                    <a href="{{ route('organization') }}" class="btn btn-primary">
                        New Organization</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <th>Organization</th>
                        <th>Product</th>
                        <th>Module</th>
                        <th>Person Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Pay Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($organizations as $organization)
                        <tr>
                            <td>{{ $organization->company }}</td>
                            <td>{{ $products[$organization->product_id] }}</td>
                            <td>{{ $organization->module->name }}</td>
                            <td>{{ $organization->name }}</td>
                            <td>{{ $organization->email }}</td>
                            <td>{{ $organization->mobile }}</td>
                            <td>{{ $organization->address }}</td>
                            <td>{{ $organization->country }}</td>
                            <td>{{ $organization->state }}</td>
                            <td>{{ $organization->city }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection