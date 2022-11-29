@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card mt-5" style="width: 25rem;">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif    
            <div class="card-body">
                <h5 class="card-title">Log In</h5>
                <form method="POST" action="{{ route('login.auth') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleDropdownFormUsername1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleDropdownFormUsername1" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input name="ceck" type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Sign In">
                </form>
                <div class="dropdown-divider"></div>
                <a class="text-decoration-none" href="register">New around here? Sign up</a>
            </div>
        </div>
    </div>
@endsection