@extends('frontend.master')

@section('content')

<div class="container">
    <h1>Booking Details</h1>

    <table class="table">
      <thead>
        <tr>
      <th>Booking ID</th>
      <th>User ID</th>
      <th>Seat Number</th>
      <th>Price</th>
      <th>Journey Date</th>
      <th>Trip ID</th>
      <th class="text-center">Action</th>
        </tr>

   @foreach ($booking as $key=>$data)
   <tr>
          <td>{{$key + 1}}</td>
          <td>{{$data->user_id}}</td>
          <td>{{$data->seat_number}}</td>
          <td>{{ count($data->seat_number) * $data->price }}</td>
          <td>{{$data->date}}</td>
          <td>{{$data->trip_id}}</td>
          <td class="text-center">


       <a href="{{route('payment')}}" class="btn btn-success">Payment</a>
       <a href="" class="btn btn-danger">Cancel</a>

      </tr>

      @endforeach



      </thead>

    </table>
  </div>

  @endsection
