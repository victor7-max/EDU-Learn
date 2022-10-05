@extends('layouts.dashboard')
@section('content')
 <!-- Page Content Wrapper Start -->
 <div class="main-content-wrapper">
    <div class="card align-items-center">
        <h4 class="title">Update Your details</h4>
        <div class="card-body row align-items-center">
            <div class="form-wrapper">
                <form method="POST" action="{{route('updateProfile')}}">
                    @csrf
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="text" placeholder="Name" name="name" value="{{ Auth::User()->name}}">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="email" placeholder="Email" name="email" value="{{ Auth::User()->email}}">
                    </div>
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <input type="numeric" placeholder="Enter New Mobile Number" name="phone" value="{{ Auth::User()->phone}}">
                    </div>
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="file"  id="formFileMultiple" name="image" placeholder="Upload New Image" value="{{ Auth::User()->image}}">
                    </div>
                    <!-- Single Form End -->
                    <div class="single-form">
                        <button class="btn btn-primary btn-hover-dark w-100">Update account</button>
                    </div>
                    <!-- Single Form End -->
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection


