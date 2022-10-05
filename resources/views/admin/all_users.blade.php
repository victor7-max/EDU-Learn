@extends('layouts.dashboard')
@section('content')
 <!-- Page Content Wrapper Start -->
 <div class="main-content-wrapper">
    <div class="card align-items-center">
        <h4 class="title">All Users</h4>
        <div class="card-body row align-items-center">
            <div class="form-wrapper">
                    <div style="margin-bottom: 10px;" class="row  col-md-12">

                        <div class="col-sm-4">
                            <a class="btn btn-primary" href="">
                                Student Users
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-warning" href="">
                                Teacher Users
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-secondary" href="">
                                Admin Users
                            </a>
                        </div>
                    </div>
                <div class="card">
                    <div class="card-header">
                        {{-- <a class="btn btn-success" href="">
                            Add New User
                        </a> --}}
                    </div>
                    <div class="col-sm-3">

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-Location">
                                <thead>
                                    <tr>
                                        <th width="10">
                                            #
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                        <th>
                                            Role
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @forelse($users as $user)
                                    <tr data-entry-id="{{ $user->id }}">
                                        <td>
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->phone }}
                                        </td>
                                        <td>
                                            @if ($user->role == 734)
                                            Student
                                            @endif
                                            @if ($user->role == 407)
                                            Teacher
                                            @endif
                                            @if ($user->role == 808)
                                            Admin
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-md btn-info" href="{{ route('edit.user',[$user->name, $user->id])}}">
                                                Edit
                                            </a>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure ?');" style="display: inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-md btn-danger" >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="12">Data Not Found!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection


