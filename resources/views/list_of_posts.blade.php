@extends('layouts.main')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
@section('content');


<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/profil.css')}}">

<!-- MAIN CSS -->
{{-- <link rel="stylesheet" href="{{asset('assets/css/tooplate-gymso-style.css')}}"> --}}
        <div>
            <div style="display: flex; justify-content: center;align-items: center;">
                <div style="margin-top:180px;position:absolute; border:1px solid black;border-radius: 50%; padding:15px;background-color: white;">
                    <img 
                    width="100px" 
                    height="100px" 
                    src="{{asset('assets/')}}" 
                    alt="">
                </div>
            </div>
            <div id="center">
                <div class="col-lg-12 col-md-12 col-12">
                    <h2 class="mb-12 pb-2" data-aos="fade-up" data-aos-delay="200">What do you want to change</h2>

                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name" style="margin-bottom:18px">
                        <input type="text" class="form-control" name="cf-name" placeholder="Surname" style="margin-bottom:18px">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email" style="margin-bottom:18px">
                        
                        <input type="password" class="form-control" name="cf-name" placeholder="Password" style="margin-bottom:18px">
                        <input type="Repeat password" class="form-control" name="cf-name" placeholder="Repeat password" style="margin-bottom:18px">


                        

                        

                        <button type="submit" class="form-control" id="submit-button" name="submit">Save Change</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
        <script src="{{asset('assets/js/custom_profile.js')}}"></script>
@endsection