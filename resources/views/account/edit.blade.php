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
              <div class="breadcrumb-item"><a href="{{ url('edit-account/',Request::segment(2))}}">Edit Account</a> </div>
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
                    <h4>Edit Account</h4>
                  </div>
                  <div class="card-body">
                   <form method="POST" action="{{ route('update-account',$edit->id) }}">
                      @csrf
                    <div class="form-group">
                      <label for="name" class="col-form-label text-md-right">{{ __('Account Name') }}</label>

                        <input id="account_name" type="text" class="form-control @error('account_name') is-invalid @enderror" name="account_name" value="{{ $edit->account_name }}" required autocomplete="account_name" autofocus>

                        @error('account_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
                    </div>

                    <div class="form-group">
                      <label for="name" class="col-form-label text-md-right">{{ __('Account Description') }}</label>

                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{  $edit->description }}"  autocomplete="description" autofocus>
                          
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