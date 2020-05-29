@extends('layouts.admin')

@section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  <br/>
        <h3 >Products</h3>
        <br/>
  
  <table id="showfeedback" class="center" >
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


<style>
    h3{
        text-align: center;
        color: white;
    }
  table.center {
    width:100%; 
    border-collapse: collapse;
    
  }
  table#showfeedback {
    background-color: white;
  }
  #showfeedback td, #showfeedback th {
  border: 1px solid #ddd;
  padding: 5px;
}
  #showfeedback tr:nth-child(even){background-color: white;}
  #showfeedback tr {background-color: #f2f2f2;}
  #showfeedback tr:hover {background-color: #ddd;}
  #showfeedback th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: Peru;
  color: white;
  }
  tr,td {text-align:left;}
</style>
@endsection