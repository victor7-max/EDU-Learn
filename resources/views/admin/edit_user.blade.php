@extends('layouts.dashboard')
@section('content')
 <!-- Page Content Wrapper Start -->
 <div class="main-content-wrapper">
    <div class="card align-items-center">
        <h4 class="title">Edit {{ $user->name }}</h4>
        <div class="card-body row align-items-center">
            <div class="form-wrapper">
                <form method="POST" action="{{route('user.update', $user)}}">
                    @csrf @method('put')
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <label for="role">Name*</label>
                        <input type="text" placeholder="Name" name="name" value="{{ $user->name }}">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <label for="role">Email*</label>
                        <input type="email" placeholder="Email" name="email" value="{{ $user->email }}">
                    </div>
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <label for="role">Phone*</label>
                        <input type="number" placeholder="Enter New Mobile Number" name="phone" value="{{ $user->phone }}">
                    </div>
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                    <div class="single-form">
                        <label for="role">Image*</label>
                        <input type="file"  id="formFileMultiple" name="image" placeholder="">
                    </div>
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                    <div class="single-form">
                        <label for="role">Password*</label>
                        <input type="password"  name="password" placeholder="" value="">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form start -->
                    <div class="single-form ">
                        <label for="role">Role*</label>
                        <select name="role" class="form-control"  multiple>
                                <option value="734">Student</option>
                                <option value="407">Teacher</option>
                                <option value="808">Admin (Can create other users)</option>
                        </select>
                    </div>
                    <!-- Single Form start -->
                    <div class="single-form">
                        <button class="btn btn-primary btn-hover-dark w-100">Edit account</button>
                    </div>
                    <!-- Single Form End -->
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection


