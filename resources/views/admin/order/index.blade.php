@extends('admin.master')

@section('title', 'Manage Order')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Manage Order</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Order Info</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Order date</th>
                                <th class="border-bottom-0">Order details</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Product Name</th>
                                <th class="border-bottom-0">Customer option</th>
                                <th class="border-bottom-0">Proceeds</th>
                                <th class="border-bottom-0">Order Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>12 November,2023</td>
                                <td>hgfhgfhfg</td>
                                <td><img src="" alt="" height="40" width="60"/></td>
                                <td>ghfghfh</td>
                                <td>ghfghfh</td>
                                <td>ghfghfh</td>
                                <td>hthf</td>
                                <td class="d-flex">
                                    <a href="" class="btn btn-success btn-sm me-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
