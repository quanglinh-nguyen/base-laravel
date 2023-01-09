@extends('layout.main')

@section('title_page','List User')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')

<div class="card">
    <div class="card-header d-flex flex-row justify-content-between align-items-center card-header-custom">
        <h3 class="card-title">User Management</h3>
        <div class="card-tools">
            <a class="btn btn-block btn-primary btn-" href="{{route('user.create')}}">
                <i class="fa-solid fa-plus"></i>
                Add
            </a>
        </div>
    </div>
    <div class="card-action">
        <form action="" class="col-5">
            <div class="card-tools d-flex flex-row justify-content-between">
               <input type="text" name="keyword" class="form-control mr-2" placeholder="Keyword" value="{{request()->get('keyword') ?? ""}}"/>
               <select name="role" class="form-control">
                    <option selected hidden value="">Select role</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" 
                            @if(request()->get('role') == $role->id)selected @endif
                            >{{$role->display_name}}
                        </option>
                    @endforeach
                </select>
                <div class="d-flex flex-row mx-2">
                    <button type="submit" class="btn btn-primary mr-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Search
                    </button>
                    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Clear</a>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body p-0 card-body-project">
        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th style="width:15%">Avatar</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Email</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            @if ($user->avatar == null)
                                <img src="https://www.businessnetworks.com/sites/default/files/default_images/default-avatar.png" alt="" width="50%">
                            @else
                                <img src="{{$user->avatar}}" alt="" style="max-width: 100px; max-height: 100px">
                            @endif
                        </td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->getRolesFirst()->display_name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-info btn-sm" href="{{route('user.edit',['user' => $user->id])}}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <form action="{{route('user.destroy',['user' => $user->id])}}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this user')">
                                    <i class="fas fa-trash"></i>
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
            {{ $users->links('common.pagination')}}
        </div>
    </div>
</div>
@endsection
