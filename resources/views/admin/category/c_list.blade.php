@extends('admin.layouts.master')
@section('title')
    :: Categories ::
@endsection
@section('sub-title')
    Category List
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
            <form action="{{route('admin.categories.index.post')}}" method="post">
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
               <a href="{{route('admin.categories.create')}}" class="btn btn-primary">
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
                    <th>SLUG</th>
                    <th>SUB CATEGORY</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td class="text-bold-500">{{$item->name}}</td>
                        <td>{{$item->slug}}</td>
                        <td class="text-bold-500">
                            {{--                @if(isset($item->mainCategories->name))
                                                {{$item->mainCategories->name}}
                                            @else
                                                Main Category
                                            @endif--}}
                            {{$item->mainCategories->name}}
                        </td>
                        <td>@if($item->is_active==='1')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Passive</span>
                            @endif
                        </td>
                        <td>

                            <form action="{{route('admin.categories.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('admin.categories.edit',$item->id)}}" class="btn icon btn-warning btn-sm" >
                                    <div class="icon dripicons-pencil"></div>
                                </a>
                                <button
                                   class="btn icon btn-danger btn-sm">
                                    <div class="icon dripicons-trash"></div>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="flex-row mt-2">
        <div class="col-12 d-flex justify-content-center">
            {{$categories->links()}}
        </div>
    </div>

@endsection
