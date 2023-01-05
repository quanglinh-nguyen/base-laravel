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
        </div>
        <div class="card-action d-flex flex-row justify-content-between">
            <form method="get" action="{{route('acronyms-fields.index')}}">
            <div class="card-tools d-flex flex-row">
                    <input
                        type="text"
                        name="keyword"
                        class="form-control mr-2"
                        placeholder="Keyword"
                        value="{{request()->get('keyword') ?? ""}}"
                    />
                    <select name="acronym_column" class="form-control" id="acronym_column">
                        <option selected value="">Select choice</option>
                        @foreach($array_acronym as $key => $value)
                            <option   value="{{$key}}"
                              @if(
                                 request()->get('acronym_column') == $key
                              )
                                  selected
                                @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>
                    <div class="d-flex flex-row mx-2">
                        <button class="btn btn-primary mr-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Search
                        </button>
                        <a class="btn btn-outline-secondary" href="{{route('acronyms-fields.index')}}">Clear</a>
                    </div>
                </div>
            </form>
            <div class="card-tools d-flex">
                <a class="btn btn-block btn-primary" href="{{route('acronyms-fields.create')}}">
                    <i class="fa-solid fa-plus"></i>
                    Add
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table
                class="table table-striped projects"
            >
                <thead>
                <tr>
                    <th>#</th>
                    <th>
                        Acronyms Banking
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th
                        style="width:200px"
                        class="text-center"
                    >
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($acronyms as $acronym)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            {{$acronym->acronym}}
                        </td>
                        <td>{{$acronym->getNameFieldColumn() ?? ''}}</td>
                        <td>{{$acronym->full_name}}</td>

                        <td class="project-actions text-center">
                            <a
                                class="btn btn-info btn-sm"
                                href={{route('acronyms-fields.edit', ['acronyms_field' => $acronym->id])}}
                            >
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="{{route('acronyms-fields.destroy', ['acronyms_field' => $acronym->id])}}" method="POST">
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
                {{ $acronyms->links('common.pagination')}}
            </div>
        </div>
    </div>
    <!-- /.card -->

@endsection
