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
                @if (auth()->user()->role == 2)
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <a href="" class="btn btn-app">
                                    <i class="fas fa-edit"></i> Ficha de inscrição
                                </a>
                                <a href="{{ route('admin.pages.arquivos.index') }}" class="btn btn-app">
                                    <i class="fas fa-inbox"></i> Arquivos digitais
                                </a>
                                <a href="{{ route('admin.pages.mensagem.index') }}" class="btn btn-app">
                                    <span class="badge bg-teal">{{ count($noticias) }}</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> Mensagens
                                </a>
                                <a href="{{ route('admin.pages.carteira.index') }}" class="btn btn-app">
                                    <i class="fas fa-file"></i> Carteira de sócio
                                </a>

                            </div>

                        </div>

                    </div>
                @else
                    <div class="row">
                        <div class="col-lg-12 col-6">
                            <a href="{{ route('admn.pages.noticias.index') }}" class="btn btn-app bg-danger">
                                <span class="badge bg-teal">{{ count($noticias) }}</span>
                                <i class="fas fa-edit"></i> Notícias
                            </a>
                            <a href="{{ route('admin.pages.congresso.index') }}" class="btn btn-app bg-danger">
                                {{-- <span class="badge bg-teal">{{ count($noticias) }}</span> --}}
                                <i class="fas fa-users"></i> Assembleia
                            </a>
                            <a href="{{ route('admin.pages.users.index') }}" class="btn btn-app bg-danger">
                                {{-- <span class="badge bg-teal">{{ App\Models\Mensagem::count() }}</span> --}}
                                <i class="fas fa-users"></i> Servidores
                            </a>
                            <a href="{{ route('admin.pages.reunioes.index') }}" class="btn btn-app bg-danger">
                                {{-- <span class="badge bg-teal">{{ count($noticias) }}</span> --}}
                                <i class="fas fa-inbox"></i> Edital de convocação
                            </a>
                            {{-- <a href="" class="btn btn-app bg-info">
                                <i class="fas fa-user"></i> Perfil
                            </a> --}}
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                @endif


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
