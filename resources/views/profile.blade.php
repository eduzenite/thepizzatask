@extends('layouts.app')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
            </ol>
        </nav>
        @include('layouts.alerts')
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <div class="card">
                    <div class="card-header text-uppercase">
                        Change <strong>Password</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("change_password") }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="password">Current password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Current password"
                                       required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="newpassword1">New password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="newpassword1" name="newpassword1" placeholder="New password"
                                       required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="newpassword2">Repeat password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="Repeat password"
                                       required="">
                            </div>
                            <hr class="mb-4">
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Salve</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <div class="card">
                    <div class="card-header text-uppercase">
                        My <strong>Profile</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("change_profile") }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First name <span class="text-danger">*</span></label>
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ auth()->user()->first_name }}" required
                                           autocomplete="first_name" autofocus>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last name <span class="text-danger">*</span></label>
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{ auth()->user()->last_name }}" required
                                           autocomplete="last_name" autofocus>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <div class="input-group">
                                    <input id="phone" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           name="phone" value="{{ auth()->user()->phone }}" required
                                           autocomplete="phone"
                                           autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ auth()->user()->email }}" required autocomplete="email"
                                       autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address1">Address <span class="text-danger">*</span></label>
                                <input id="address1" type="text"
                                       class="form-control @error('address1') is-invalid @enderror"
                                       name="address1" value="{{ auth()->user()->address1 }}" required
                                       autocomplete="address1"
                                       autofocus>
                                @error('address1')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="mb-3">
                                        <label for="address2">Address 2 <span
                                                class="text-muted">(Optional)</span></label>
                                        <input id="address2" type="text"
                                               class="form-control @error('address2') is-invalid @enderror"
                                               name="address2" value="{{ auth()->user()->address2 }}"
                                               autocomplete="address2"
                                               autofocus>
                                        @error('address2')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zip">Zip <span class="text-danger">*</span></label>
                                    <input id="zip" type="text"
                                           class="form-control @error('zip') is-invalid @enderror"
                                           name="zip" value="{{ auth()->user()->zip }}" required
                                           autocomplete="zip"
                                           autofocus>
                                    @error('zip')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <hr class="mb-4">
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Salve</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
