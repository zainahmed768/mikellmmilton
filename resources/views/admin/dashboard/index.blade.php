@extends('admin.layouts.app')

@push('css')
    <style>
        .link-color {
            color: black !important;
        }
    </style>
@endpush
@section('content')
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">1</h2>
                        <p class="mb-0"><a href="" style="color: black">Total Users</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">0</h2>
                        <p class="mb-0"><a href="" style="color: black">Total FAQ's</a></p>
                    </div>
                    <div class="card-content">
                        {{--                    <div id="orders-received-chart"></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">0</h2>
                        <p class="mb-0"><a href="" style="color: black">Total Applications</a></p>
                    </div>
                    <div class="card-content">
                        {{--                    <div id="orders-received-chart"></div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">{{ $subscriptions }}</h2>
                        <p class="mb-0"><a href="" style="color: black">Total Subscriptions</a></p>
                    </div>
                    <div class="card-content">
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Users</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive mt-1">
                            <table class="table table-hover-animation mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users ?? [] as $user)
                                        <tr>
                                            <td><a href="{!! route('admin.users.show', $user->id) !!}">{!! $user->name !!}</a></td>
                                            <td>{!! $user->email !!}</td>
                                            <td>{!! $user->is_active ? 'Active' : 'Inactive' !!}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No Users Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
