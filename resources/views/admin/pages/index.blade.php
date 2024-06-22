@extends('admin.layout.app')
@section('title', 'Home')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Meus dados</h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-6">
                            <a href="" class="btn btn-app">
                                <i class="fas fa-edit"></i> Ficha de inscrição
                            </a>
                            <a href="" class="btn btn-app">
                                <i class="fas fa-inbox"></i> Arquivos digitais
                            </a>
                            <a href="" class="btn btn-app">
                                <span class="badge bg-teal">0</span>
                                <i class="fa fa-envelope" aria-hidden="true"></i> Mensagens
                            </a>
                            <a href="" class="btn btn-app">
                                <i class="fas fa-file"></i> Carteira de sócio
                            </a>

                        </div>

                    </div>

                </div>



            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
