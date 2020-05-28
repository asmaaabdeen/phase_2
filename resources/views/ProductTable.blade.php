@extends('layouts.admin')

@section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Photo URL</th>
      <th scope="col">Product Price</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($product as $row)
      <tr>
        <td>{{ $row['id'] }} </td>
        <td>{{ $row['name'] }} </td>
        <td>{{ $row['description'] }}</td>
        <td>{{ $row['photo'] }}</td>
        <td>  {{ $row['price'] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
