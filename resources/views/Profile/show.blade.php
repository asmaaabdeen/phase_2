@extends('layouts.nav')
<head>
  

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/maiin.css')}}">
</head>
@section('content')

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="contain">
                <div class="signup-content">
                    {{-- <form method="POST" id="signup-form" class="signup-form" action="{{ route('profile.update', ['profile'=> $profile->id]) }}">--}}
                    @csrf
                   @method('PUT')

                    <h2 class="form-title">Your Profile</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="firstname" id="fname" placeholder="First Name" disabled value="{{ old( 'Name' , $profile->first_name) }}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lastname" id="lname" placeholder="Last Name" disabled value="{{ old( 'Name' , $profile->last_name) }}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address" disabled value="{{ old( 'Name' , $profile->address) }}"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" disabled value="{{ old( 'Name' , $profile->e_mail) }}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="UserName" disabled value="{{ old( 'Name' , $profile->user_name) }}"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" disabled value="{{ old( 'Name' , $profile->password) }}"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                       
                        <div class="form-group">
                        <a href="/profile/{{$id}}/edit"> <button class="form-submit" >edit</button></a>
                        </div>
                   {{-- </form> --}}
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    @endsection
    