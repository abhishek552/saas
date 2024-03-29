@extends('layouts.layout')

@section('content')
      <!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                  <div class="card-header">
                    <h4>Account List</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $i= 1;
                        @endphp
                          @foreach($accountDetails as $key => $accountvalue)
                          <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{ $accountvalue->account_name }}</td>
                            <td></td>
                            <td></td>
                            <td>
                              <a href="#">Delete</a>
                            </td>
                          </tr>
                          @php $i++ @endphp
                          @endforeach
                      </tbody>
                    </table>
                   
                  </div>
                </div>
            </div>
          </div>
        </section>
      </div>
@endsection