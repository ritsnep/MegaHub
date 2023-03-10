{{-- here we have implemented layout which is in resources/view/layout/app --}}


@extends('layouts.app')

@section('title', 'About Us')

@section('content')
   
    <div class="container">
      <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>CustomerName</th>
                <th>Address</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>City</th>
                <th>State</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)    
                <tr>
                    <td>{{$customer->customer_name}}</td>
                    <td>{{$customer->Address}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->DOB}}</td>
                    <td>{{$customer->City}}</td>
                    <td>{{$customer->State}}</td>
                </tr>
                @endforeach
            </tbody>
      </table>
    
    </div>

@endsection
