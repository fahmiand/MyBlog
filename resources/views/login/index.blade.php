@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-lg-n5">
    <div class="col-md-4">
        <main class="form-signin">
            <div class="margin">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form action="/login" method="post">
    
                    @csrf 
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus autocomplete="off" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    </div>
    
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
            </div>
        </main>
    </div>
</div>


@endsection