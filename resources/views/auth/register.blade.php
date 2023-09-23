@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card"> -->
                <!-- <div class="card-header">{{ __('Register') }}</div> -->

                <div class="container px-4 px-lg-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-outline mb-4 mt-3">
                                <input type="text" name="name" id="form2Example1" class="form-control" placeholder="Name" />
                            
                           
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-4">
                                <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
                            

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example1" class="form-control" placeholder="Password" />
                        

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="form-outline mb-4">
                                <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                            
                            </div>
                           
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  class="btn btn-primary  mb-4 text-center">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            <!-- </div>
        </div> -->
    </div>
</div>
@endsection
