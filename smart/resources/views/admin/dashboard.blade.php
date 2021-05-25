@extends('layouts.master')


@section('title')
Dashboard | Smart Restaurant
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Restaurant Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Order No
                      </th>
                      <th>
                        Item Name
                      </th>
                      <th>
                        Qty
                      </th>
                      <th>
                        Unit Price
                      </th>
                      <th>
                        Total Price
                      </th>
                      
                      <th >
                      Payment
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          01586333
                        </td>
                        <td>
                          Beef Burger
                        </td>
                        <td>
                        1
                        </td>
                        <td>
                        240
                        </td>
                        <td>
                          240
                        </td>
                        <td>
                        Paid
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