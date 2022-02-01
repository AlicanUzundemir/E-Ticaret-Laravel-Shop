@extends('admin.layouts.master')
@section('title')
    :: Categories ::
@endsection
@section('sub-title')
    Category Add
@endsection
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                @include('common.error_b')
                @include('common.messages_b')
                <form class="form" action="{{route('admin.categories.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Name</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder=" Name"
                                       name="name" value="{{old('name')}}">
                            </div>
                        </div>
           {{--             <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Slug</label>
                                <input type="text" id="last-name-column" class="form-control" placeholder="Slug"
                                       name="slug">
                            </div>
                        </div>--}}
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Categories</label>

                                <fieldset class="form-group">
                                    <select class="form-select" name="up_id" id="basicSelect">
                                        <option value="0">Main Category</option>
                                        @foreach($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </fieldset>

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Status</label>
                                <fieldset class="form-group">
                                    <select class="form-select" name="is_active" id="basicSelect">
                                        <option value="1">Active</option>
                                        <option value="0">Passive</option>

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
