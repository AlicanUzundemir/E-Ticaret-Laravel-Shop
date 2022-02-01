@extends('admin.layouts.master')
@section('title')
    :: Products ::
@endsection
@section('sub-title')
    Product List
@endsection
@section('content')
    <div class="card-content">

        <div class="card-header">
            @include('common.error_b')
            @include('common.messages_b')
            <form action="{{route('admin.products.index.post')}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-4 float-left">
                        <input class="form-control" name="search" type="text" value="{{old('search')}}"
                               placeholder="Search Category">
                    </div>
                    <div class="col-2 float-right">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>

                    <div class="col-6 float-end">
                           <span class="float-end">
               <a href="{{route('admin.products.create')}}" class="btn btn-primary">
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
                    <th>Image</th>
                    <th>PRICE</th>
                    <th>STOCK</th>
                    <th>REMAIN</th>
                    <th>CREATED AT</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td class="text-bold-500">{{$item->name}}</td>
                        <td>{{$item->slug}}</td>
                        <td>
                            @if(isset($item->productDetail->image))
                                <img src="{{asset($item->productDetail->image)}}" style="height: 50px" alt="">
                            @else
                                <img src="https://via.placeholder.com/50/#67ed56" style="height: 50px" alt="">
                            @endif
                        </td>
                        <td class="text-bold-500">{{$item->price}}</td>
                        <td class="text-bold-500">{{$item->stock}}</td>
                        <td class="text-bold-500">{{$item->remain}}</td>
                        <td class="text-bold-500">{{date('d.m.Y',strtotime($item->created_at))}}</td>
                        <td>

                            <form action="{{route('admin.products.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('admin.products.edit',$item->id)}}" class="btn icon btn-warning btn-sm"
                                >
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
            {{$products->links()}}
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>Products List</h4>
                </div>
                <div class="card-body">
                    <div id="area"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script>

        /*    const data1 ={{$list}};
        console.log(data)*/
        var areaOptions = {
            series: [
                {
                    name: "series1",
                    data: [112, 3, 45, 322, 342, 52, 41],
                },
                {
                    name: "series2",
                    data: [11, 32, 45, 32, 34, 52, 41],
                },
            ],
            chart: {
                height: 350,
                type: "area",
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                type: "datetime",
                categories: [
                    "2018-09-19T00:00:00.000Z",
                    "2018-09-19T01:30:00.000Z",
                    "2018-09-19T02:30:00.000Z",
                    "2018-09-19T03:30:00.000Z",
                    "2018-09-19T04:30:00.000Z",
                    "2018-09-19T05:30:00.000Z",
                    "2018-09-19T06:30:00.000Z",
                ],
            },
            tooltip: {
                x: {
                    format: "dd/MM/yy HH:mm",
                },
            },
        };
        var area = new ApexCharts(document.querySelector("#area"), areaOptions);

        area.render();
    </script>
@endsection