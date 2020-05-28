@extends('layouts.master')
<head>

<link rel="stylesheet" href="{{asset('register.css')}}">

</head>

@section('content')

<br>
<h1>Add Product</h1>
<br>
<hr style="width:1000px">

<div class="container">

    <form action="/addNewProduct" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="Productname" placeholder="Product name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Description" placeholder="Product Description">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="adress">Photo URL [link]</label>
      </div>
      <div class="col-75">
        <input type="text" id="adress" name="Photo" placeholder="Photo link">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mail">Price</label>
      </div>
      <div class="col-75">
        <input type="number" id="email" name="Price" placeholder="Price">
      </div>
    </div>

@csrf

    <br>
    <div class="row">
      <input type="submit" value="AddProduct">
    </div>

    </form>

  </div>

@endsection
