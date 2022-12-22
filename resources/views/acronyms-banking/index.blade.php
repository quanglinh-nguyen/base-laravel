@extends('layout.main')

@section('title_page','Acronyms Banking')

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Acronyms Banking</h3>

            <div class="card-tools">
                <form method="get" action="{{route('acronyms-banking.index')}}">
                    <div
                        class="input-group input-group-sm"
                        style="width: 150px"
                    >
                        <input
                            type="text"
                            name="keyword"
                            class="form-control float-right"
                            placeholder="Search"
                            value="{{request()->get('keyword') ?? ""}}"
                        />

                        <div class="input-group-append">
                            <button
                                type="submit"
                                class="btn btn-default"
                            >
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-action">
            <div class="card-tools d-flex">
                <a
                    class="btn btn-block btn-primary btn-sm"
                    href="{{route('acronyms-banking.create')}}"
                >Add Acronyms Banking</a
                >
            </div>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped projects"
            >
                <thead>
                <tr>
                    <th>Stt</th>
                    <th>
                        Acronyms Banking
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th
                        style="width: 20%"
                        class="text-center"
                    >
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @php
                    $stt = 0;
                @endphp
                @foreach($banks as $bank)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>
                            {{$bank->acronym}}
                        </td>
                        <td>{{$bank->full_name}}</td>

                        <td class="project-actions text-right">
                            <a
                                class="btn btn-info btn-sm"
                                href={{route('acronyms-banking.edit', ['acronyms_banking' => $bank->id])}}
                            >
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{route('acronyms-banking.destroy', ['acronyms_banking' => $bank->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete cronyms Banking');"
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
                {{ $banks->links('common.pagination')}}
            </div>
        </div>
    </div>
    <!-- /.card -->

@endsection
