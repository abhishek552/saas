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
                    <h4>Team Member(s)</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>S.No</th>
                          <th>User Name</th>
                          <th>Email</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                        <tbody>
                        @php
                          $i= 1;
                        @endphp
                          @foreach($teamDetails as $key => $teamvalue)
                          <tr>
                            <td class="p-0 text-center">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <th scope="row">{{$i}}</th>
                            <td>{{ $teamvalue->getAccountdetail->name }}</td>
                            <td>{{ $teamvalue->getAccountdetail->email }}</td>
                            <td>{{date('Y-m-d',strtotime($teamvalue->getAccountdetail->created_at))}}</td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          @php $i++ @endphp
                          @endforeach
                      </tbody>

                        
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
      </div>
@endsection