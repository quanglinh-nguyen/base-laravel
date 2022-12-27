@extends('layout.main')

@section('title_page','List User')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">User Management</h3>
    </div>
    <div class="card-action d-flex flex-row justify-content-between">
        <form action="" class="col-5">
            <div class="card-tools d-flex flex-row justify-content-between">
               <input type="text" name="table_search" class="form-control mr-2" placeholder="Keyword"/>
               <select name="" class="form-control">
                    <option value="">Super Admin</option>
                    <option value="">Admin</option>
                </select>
                <div class="d-flex flex-row mx-2">
                    <button class="btn btn-primary mr-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Search
                    </button>
                    <button class="btn btn-outline-secondary">Clear</button>
                </div>
            </div>
        </form>
        <div class="card-tools">
            <a class="btn btn-block btn-primary btn-" href="{{route('user.create')}}">
                <i class="fa-solid fa-plus"></i>
                Add
            </a>
        </div>
    </div>
    <div class="card-body p-0 card-body-project">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th style="width:15%">Avatar</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Email</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1.</td>
                <td>Trần Thu Giáng</td>
                <td>
                    <img src="https://i.pinimg.com/222x/b2/f1/68/b2f1681f71673cf87425572e0ed94ae4.jpg" alt="" style="max-width: 100px; max-height: 100px">
                </td>
                <td>0123456879</td>
                <td>Super admin</td>
                <td>giangtt13@gmail.com</td>
                <td class="project-actions text-center">
                    <a class="btn btn-info btn-sm" href="{{route('user.edit',['user' => 1])}}">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Nguyễn Hữu Quang Linh</td>
                <td>
                    <img src="https://wallpaperaccess.com/full/1385714.jpg" alt="" style="max-width: 100px; max-height: 100px">
                </td>
                <td>0123456879</td>
                <td>Admin</td>
                <td>lingnhq@gmail.com</td>
                <td class="project-actions text-center">
                    <a class="btn btn-info btn-sm" href="{{route('user.edit', ['user'=>1])}}">
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
                <td>3.</td>
                <td>Nguyễn Quyết Tiến</td>
                <td>
                    <img src="https://cdn.vox-cdn.com/thumbor/mGsDgU2JoyHyRJFaeVh9K5eKdTc=/0x0:1800x1013/1200x800/filters:focal(756x363:1044x651)/cdn.vox-cdn.com/uploads/chorus_image/image/60154183/Webp.net_resizeimage__5_.0.jpg" alt="" style="max-width: 100px; max-height: 100px">
                </td>
                <td>0123456879</td>
                <td>Admin</td>
                <td>nguyenquyettien0102@gmail.com</td>
                <td class="project-actions text-center">
                    <a class="btn btn-info btn-sm" href="{{route('user.edit',['user' => 1])}}">
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
        <ul class="pagination pagination-sm m-0 float-right">
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
@endsection
