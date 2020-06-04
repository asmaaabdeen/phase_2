@extends('layouts.admin')

@section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  <br/>
        <h3 >Delivery Boys</h3>
        <br/>
        <div class="container">
  <table id="showfeedback" class="center">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Password</th>
      <th scope="col">Work Shift</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    @foreach ($staff as $row)
      <tr>
        <td>{{ $row['id'] }} </td>
        <td>{{ $row['user_name'] }} </td>
        <td>{{ $row['password'] }}</td>
        <td>{{ $row['work_shift'] }}</td>

        <td>
          <form  method="post" class="delete_form" action="delete">
            @csrf
            <button name="id" value="{{$row['id']}}" type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
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
  padding: 15px;
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
