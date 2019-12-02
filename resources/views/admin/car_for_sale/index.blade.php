@extends('layouts.app')

@section('title','CarForSale')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('car_for_sale.create') }}" class="btn btn-primary">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All car_for_sales</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Model Name</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>discount</th>
                                <th>mileage</th>
                                <th>engine</th>
                                <th>state</th>
                                <th>year</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($car_for_sales as $key=>$car_for_sale)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $car_for_sale->name }}</td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/item/'.$car_for_sale->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                            <td>{{ $car_for_sale->car_category->name }}</td>
                                            <td>{{ $car_for_sale->description }}</td>
                                            <td>{{ $car_for_sale->price }}</td>
                                            <td>{{ $car_for_sale->discount }}</td>
                                            <td>{{ $car_for_sale->mileage }}</td>
                                            <td>{{ $car_for_sale->engine }}</td>
                                            <td>{{ $car_for_sale->state }}</td>
                                            <td>{{ $car_for_sale->year }}</td>
                                            <td>{{ $car_for_sale->created_at }}</td>
                                            <td>{{ $car_for_sale->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('car_for_sale.edit',$car_for_sale->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $car_for_sale->id }}" action="{{ route('car_for_sale.destroy',$car_for_sale->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $car_for_sale->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush