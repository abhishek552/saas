      @extends('layouts.layout')

        @section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Account</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ url('/')}}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ url('account')}}">Account</a></div>
              <div class="breadcrumb-item"><a href="{{ url('create-account')}}">Add New Account</a> </div>
            </div>
          </div>

          <div class="section-body">
          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add New Account</h4>
                  </div>
                  <div class="card-body">
                   <form method="POST" action="{{ route('create-admin') }}">
                      @csrf
                    <div class="form-group">
                      <label for="name" class="col-form-label text-md-right">{{ __('Account Name') }}</label>

                        <input id="account_name" type="text" class="form-control @error('account_name') is-invalid @enderror" name="account_name" value="{{ old('account_name') }}" required autocomplete="account_name" autofocus>

                        @error('account_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
                    </div>

                    <div class="form-group">
                      <label for="name" class="col-form-label text-md-right">{{ __('Account Description') }}</label>

                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus>
                          
                    </div>

                    <div class="form-group ">
                      <label for="name" class="col-form-label text-md-right">{{ __('User Name') }}</label>
                      <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

                        @error('user_name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                     <div class="form-group">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>

                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                           
                      </div>
                      <div class="form-group ">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                        </div>
                   
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      @endsection