@extends('layout.main')

@section('title_page','List Customer')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center card-header-custom">
            <h3 class="card-title">Customer Management</h3>
            <div class="card-tools d-flex mr-1">
                <button class="btn btn-success mr-2"><i class="fa-solid fa-file-export"></i>Export</button>
                <a class="btn btn-block btn-primary" href="{{route('customers.create')}}">
                    <i class="fa-solid fa-plus"></i>
                    Add
                </a>
            </div>
        </div>
        <div class="card-action d-flex flex-row justify-content-between">
            <form action="" class="col-12">
                <div class="card-tools d-flex flex-row">
                    <div class="input-group mr-2">
                        <input type="text" name="table_search" class="form-control" placeholder="Geo Code"/>
                    </div>
                    <div class="input-group mr-2">
                        <input type="text" name="table_search" class="form-control" placeholder="Organization (Viet)"/>
                    </div>
                    <div class="input-group mr-2">
                        <input type="text" name="table_search" class="form-control" placeholder="Profesional"/>
                    </div>
                    <div class="input-group mr-2">
                        <input type="text" name="table_search" class="form-control" placeholder="Attendance"/>
                    </div>
                    <div class="input-group mr-2">
                        <select name="" class="form-control">
                            <option disabled selected hidden>Industry</option>
                            <option value="">Banking</option>
                            <option value="">IT Vendor</option>
                            <option value="">Multi-disciplinary</option>
                            <option value="">Telecom</option>
                            <option value="">Transportation & Logistics</option>
                            <option value="">Financial Services</option>
                            <option value="">Fintech</option>
                        </select>
                    </div>
                    <div class="input-group mr-2">
                        <select name="" class="form-control">
                            <option disabled selected hidden>Level</option>
                            <option value="">M - Level</option>
                            <option value="">C - Level</option>
                            <option value="">E - Level</option>
                        </select>
                    </div>
                    <div class="input-group mr-2">
                        <input type="text" class="form-control float-right" id="reservation">
                    </div>
                    <div class="d-flex flex-row">
                        <button class="btn btn-primary mr-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Search
                        </button>
                        <button class="btn btn-outline-secondary">Clear</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body p-0 card-body-project">
            <table class="table table-striped projects table-customer">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Industry</th>
                    <th>GeoCode</th>
                    <th style="width:20%">OrganizationV</th>
                    <th style="width:13%">Name</th>
                    <th style="width:20%">Title (V) - Department</th>
                    <th>Professional</th>
                    <th>TitleLevel</th>
                    <th>Business Email</th>
                    <th>Attendance</th>
                    <th>LastUpdatedDate</th>
                    <th class="text-center">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $key => $customer)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $customer->industry }}</td>
                    <td>{{ $customer->geo_code }}</td>
                    <td>{{ $customer->organization_viet }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->title_department_viet }}</td>
                    <td>{{ $customer->professional }}</td>
                    <td>{{ $customer->title_level }}</td>
                    <td>{{ $customer->business_email }}</td>
                    <td>{{ $customer->attendance }}</td>
                    <td>{{ $customer->last_updated_date }}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal" data-id = "{{ $customer->id }}">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm"
                            href={{route('customers.edit', ['customer' => $customer->id])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <form action="{{route('customers.destroy', ['customer' => $customer->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete customer');"
                                type="submit"
                                data-method="delete"
                            >
                                <i class="fas fa-trash"> </i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <div class="d-flex justify-content-end">
                {{ $customers->links('common.pagination')}}
            </div>
        </div>
    </div>
    <!-- /.card -->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <strong>Industry</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                    <strong>Industry</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                    <strong>Industry</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        //Date range picker
        $('#reservation').daterangepicker()
    </script>
@endsection
