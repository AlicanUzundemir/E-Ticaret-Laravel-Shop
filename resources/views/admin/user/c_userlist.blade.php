@extends('admin.layouts.master')
@section('title')
    :: Users ::
@endsection
@section('sub-title')
    User List
@endsection
{{--@section('css')
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/dripicons/webfont.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/pages/dripicons.css')}}">
    @endsection--}}
@section('content')
<div class="card-content">

        <div class="card-header">
            @include('common.error_b')
            @include('common.messages_b')
            <form action="{{route('admin.users.index.post')}}" method="post">
                @csrf
                <div class="row">

                    <div class="col-4 float-left">
                        <input class="form-control" name="search" type="text" placeholder="Search Category">
                    </div>
                    <div class="col-2 float-right">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>

                    <div class="col-6 float-end">
                           <span class="float-end">
               <a href="{{route('admin.users.create')}}" class="btn btn-primary">
                <div class="icon dripicons-plus"> Add</div>

               </a>
           </span>
                    </div>
                </div>
            </form>

        </div>
        <!-- table head dark -->
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>

                </tr>
                </thead>
                <tbody>

                @foreach($users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td class="text-bold-500">{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role}}</td>

                        <td>
                            <a href="#" class="btn icon btn-warning btn-sm">
                                <div class="icon dripicons-pencil"></div>
                            </a>
                            <a href="#" class="btn icon btn-danger btn-sm">
                                <div class="icon dripicons-trash"></div>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <div class="flex-row mt-2">
                <div class="col-12 d-flex justify-content-center">
                    {{$users->links()}}
                </div>
            </div>

        </div>
    </div>

@endsection
