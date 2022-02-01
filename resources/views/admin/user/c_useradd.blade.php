@extends('admin.layouts.master')
@section('title')
    :: Users ::
@endsection
@section('sub-title')
    User Add
@endsection
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                @include('common.error_b')
                @include('common.messages_b')
                <form class="form" action="{{route('admin.users.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Name</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder=" Name"
                                       name="name">
                            </div>
                        </div>
                       <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Email</label>
                                <input type="text" id="last-name-column" class="form-control" placeholder="Email"
                                       name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Password</label>
                                <input type="password" id="last-name-column" class="form-control" placeholder="Password"
                                       name="password">
                            </div>
                        </div>                    
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Role</label>
                                <fieldset class="form-group">
                                    <select class="form-select" name="role" id="basicSelect">
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>

                                    </select>
                                </fieldset>
                            </div>
                        </div>             

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
