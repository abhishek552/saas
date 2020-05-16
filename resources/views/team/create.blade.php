      @extends('layouts.layout')

        @section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Team</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ url('/')}}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ url('team')}}">Team</a></div>
              <div class="breadcrumb-item"><a href="{{ url('team-user')}}">Add New Team Member</a> </div>
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
                    <h4>Add New Team Member</h4>
                  </div>
                  <div class="card-body">
                   <form method="POST" action="{{ route('create-team') }}">
                      @csrf

                    <div class="form-group ">
                      <label for="name" class="col-form-label text-md-right">{{ __('User Type') }}</label>
                      <select id="user_type" name="user_type" required class="form-control"  autofocus>
                        <option value="">select option</option>
                        <option value="3">Admin</option>
                        <option value="4">User</option>
                      </select>
                    </div>
                

                    <div class="form-group ">
                      <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="user_name" autofocus>

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