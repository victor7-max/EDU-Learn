@extends('layouts.dashboard')
@section('content')
 <!-- Page Content Wrapper Start -->
 <div class="main-content-wrapper">
    <div class="card align-items-center">
        <h4 class="title">Create New Course</h4>
        <div class="card-body row align-items-center">
            <div class="form-wrapper">
                <form method="POST" action="">
                                    @csrf
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                      <div class="single-form">
                        <input type="numeric" placeholder="Enter New Mobile Number" name="phone">
                    </div>
                    <!-- Single Form End -->
                      <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="file"  id="formFileMultiple" name="image" placeholder="Upload New Image">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <!-- Single Form End -->
                    <!-- Single Form Start -->
                    <div class="single-form">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                           <!-- Single Form start -->
                    <div class="single-form {{ $errors->has('role') ? 'has-error' : '' }}">
                        <label for="role">Role*</label>
                        <select name="role" class="form-control"  multiple>
                                <option value="734">Student</option>
                                <option value="407">Teacher</option>
                                <option value="808">Admin (Can create other users)</option>
                        </select>
                        @if($errors->has('role'))
                            <em class="invalid-feedback">
                                {{ $errors->first('role') }}
                            </em>
                        @endif
                    </div>
                           <!-- Single Form End -->
                    <div class="single-form">
                        <button class="btn btn-primary btn-hover-dark w-100">Create an Course</button>
                    </div>
                    <!-- Single Form End -->
                </form>
            </div>
        </div>



    </div>
 </div>
@endsection


