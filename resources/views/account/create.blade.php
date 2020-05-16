      @extends('layouts.layout')

        @section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Account</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ url('account')}}">Account</a></div>
              <div class="breadcrumb-item"><a href="{{ url('create-account')}}">Add New Account</a> </div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add New Account</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Account Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select class="form-control" multiple="" data-height="100%">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="d-block">Checkbox</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Checkbox 1
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                          Checkbox 2
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Color</label>
                      <input type="color" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Datetime Local</label>
                      <input type="datetime-local" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>File</label>
                      <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Month</label>
                      <input type="month" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="d-block">Radio</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Radio 1
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                        <label class="form-check-label" for="exampleRadios2">
                          Radio 2
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Range</label>
                      <input type="range" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Search</label>
                      <input type="search" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tel</label>
                      <input type="tel" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Time</label>
                      <input type="time" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Url</label>
                      <input type="url" class="form-control">
                    </div>
                    <div class="form-group mb-0">
                      <label>Week</label>
                      <input type="week" class="form-control">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Inline Forms</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-inline">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                      <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

                      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Help Text</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputPassword5">Password</label>
                      <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                      <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                      </small>
                    </div>
                    <div class="form-inline">                           
                      <div class="form-group">
                        <label for="inputPassword6">Password</label>
                        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                          Must be 8-20 characters long.
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Custom Forms #2</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Select</div>
                    <div class="form-group">
                      <label>Choose One</label>
                      <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                    <div class="section-title">File Browser</div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Input Group Text</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <input type="text" class="form-control text-right" id="inlineFormInputGroup2" placeholder="Your URL">
                        <div class="input-group-append">
                          <div class="input-group-text">.com</div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Input Group #2</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Multiple Addons</div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">First and last name</span>
                        </div>
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                      </div>
                    </div>

                    <div class="section-title">Button</div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Button</button>
                        </div>
                      </div>
                    </div>

                    <div class="section-title">Select With Button</div>
                    <div class="form-group">
                      <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Button</button>
                        </div>
                      </div>
                    </div>

                    <div class="section-title">Select, Button &amp; Input</div>
                    <div class="form-group">
                      <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect05">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Button</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      @endsection