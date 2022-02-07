@extends('layouts.adm_layouts')

@section('title', 'Список' )


@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи </h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{session('success')}}
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">

                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%"> #ID</th>
                            <th> Название</th>
                            <th style="width: 25%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>
                                    <a href="{{route('post.edit',$p->id)}}"> {{$p->name}} </a>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('post.edit',$p->id)}}">
                                        <i class="fas fa-pencil-alt"> </i>
                                    </a>
                                    <form action="{{route('post.destroy',$p->id)}}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                            <i class="fas fa-trash"> </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
