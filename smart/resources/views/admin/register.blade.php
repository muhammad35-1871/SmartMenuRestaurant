@extends('layouts.master')


@section('title')
Registered Roles | Smart Restaurant
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Usertype
                      </th>
                      <th>
                        EDIT
                      </th>
                      <th>
                        DELETE
                      </th>
                      </th>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <td>
                         Mamun
                      </td>
                        <td>
                      018563333
                        </td>
                        <td>
                      admin@gmail.com
                        </td>
                        <td>
                       admin

                        <td >
                          <a href="#" class="btn btn-success">EDIT</a>
                        </td>
                        <td >
                          <a href="#" class="btn btn-danger">DELETE</a>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          

@endsection


@section('scripts')

@endsection