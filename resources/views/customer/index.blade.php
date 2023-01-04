@extends('layout.main')

@section('title_page','List Customer')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center">
            <h3 class="card-title">Customer Management</h3>
            <div class="card-tools d-flex mr-1">
                <button class="btn btn-success mr-2"><i class="fa-solid fa-file-export"></i>Export</button>
                <a class="btn btn-block btn-primary" href="{{route('customer.create')}}">
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
                <tr>
                    <td>1</td>
                    <td>Banking</td>
                    <td>HCMC</td>
                    <td>Ngân hàng Bank of China (Hong Kong) Limited - Chi nhánh Thành phố Hồ Chí Minh</td>
                    <td>Đào Cảnh Hoa</td>
                    <td>Trưởng phòng Kinh doanh</td>
                    <td>Business</td>
                    <td>M - Level</td>
                    <td>daocanhhoa@bankofchina.com</td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Banking</td>
                    <td></td>
                    <td>NGÂN HÀNG BPCE IOM</td>
                    <td>Tran Trung</td>
                    <td>Trade Finance</td>
                    <td>Fiance</td>
                    <td>E - Level</td>
                    <td>trung.tran@bpce-vietnam.com</td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Banking</td>
                    <td>Hanoi</td>
                    <td>Ngân hàng Chính sách xã hội (VBSP)</td>
                    <td>Đào Thị Lan Hương</td>
                    <td>Nhân viên Phòng CNTT</td>
                    <td>IT</td>
                    <td>E - Level</td>
                    <td></td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Banking</td>
                    <td>N/a</td>
                    <td>Ngân hàng HongLeong Bank</td>
                    <td>Tạ Duy Cường</td>
                    <td>Chuyên viên Khối KHDN lớn</td>
                    <td>Corporate</td>
                    <td>E - Level</td>
                    <td><p>duycuong.ta@hlbvn.hongleong.com</p></td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Banking</td>
                    <td>Hanoi</td>
                    <td>Ngân hàng Hợp tác xã Việt Nam (Co-opBank)</td>
                    <td>Trần Trung Hải</td>
                    <td>Phụ trách phòng Marketing và triển khai sản phẩm - Trung tâm Thẻ và dịch vụ ngân hàng số</td>
                    <td>Mar-com</td>
                    <td>M - Level</td>
                    <td>haitt@co-opbank.vn</td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>IT Vendor</td>
                    <td></td>
                    <td>Backbase</td>
                    <td>Riddhi Dutta</td>
                    <td>Phó Chủ tịch khu vực</td>
                    <td>BoM</td>
                    <td>C - Level</td>
                    <td></td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>IT Vendor</td>
                    <td></td>
                    <td>FPT Information System</td>
                    <td>Nguyễn Anh Vũ</td>
                    <td>FIS BANK PB6</td>
                    <td>Bank</td>
                    <td>E - Level</td>
                    <td>vuna19@fpt.com.vn</td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Multi-disciplinary</td>
                    <td></td>
                    <td>Công ty Cổ phần TBS Link (TBS)</td>
                    <td>Bùi Thị Kim Thanh</td>
                    <td>Tổng Giám đốc</td>
                    <td>CEO</td>
                    <td>C - Level</td>
                    <td></td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Telecom</td>
                    <td></td>
                    <td>Công ty Cổ phần Lina Network</td>
                    <td>Nguyễn Đăng Triều Thiên</td>
                    <td>CEO</td>
                    <td>CEO</td>
                    <td>C - Level</td>
                    <td></td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Transportation & Logistics</td>
                    <td></td>
                    <td>Tổng công ty Bưu điện Việt Nam</td>
                    <td>Nguyễn Thị Tuyết Mai</td>
                    <td>Trưởng phòng Dịch vụ Thanh toán, Ban Dịch vụ Tài chính bưu chính</td>
                    <td>Payment</td>
                    <td>M - Level</td>
                    <td>tuyetmai@vnpost.vn</td>
                    <td>BB'22</td>
                    <td>01-12-2022</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm"
                            data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-eye"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" 
                            href={{route('customer.edit', ['customer' => 10])}}>
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"> </i>
                            Delete
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul
                class="pagination pagination-sm m-0 float-right"
            >
                <li class="page-item">
                    <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
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
