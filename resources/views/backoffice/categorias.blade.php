@extends('template.app')

@section('content')

{{-- Linha nova categoria --}}
<div class="row">
    <div class="col-xl-6 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Nova</h6>
                    <h2 class="mb-0">Categoria</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Nome</label>
                                    <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nova categoria" >
                                </div>
                            </div>
                            <div class="col-lg-2 align-self-end">
                                <div class="form-group">
                                    <button class="btn btn-primary"> Criar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Linha todas as categorias --}}
<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Todas as</h6>
                    <h2 class="mb-0">Categorias</h2>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- tabela de categorias -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Publicações</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            Donec fermentum
                            </td>
                            <td>
                            Publicado
                            </td>
                            <td>
                                12
                            </td>
                            <td>
                            <i class="fas fa-arrow-up text-primary mr-3"></i>
                            <i class="fas fa-arrow-down text-danger mr-3"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Venenatis
                            </td>
                            <td>
                            Publicado
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                            <i class="fas fa-arrow-up text-primary mr-3"></i>
                            <i class="fas fa-arrow-down text-danger mr-3"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Venenatis
                            </td>
                            <td>
                                Não publicado
                            </td>
                            <td>
                                15
                            </td>
                            <td>
                                <i class="fas fa-arrow-up text-primary mr-3"></i>
                                <i class="fas fa-arrow-down text-danger mr-3"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



{{-- <div class="row">
    <div class="col-xl-6 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Todas as</h6>
                    <h2 class="mb-0">Categorias</h2>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- tabela de posts -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            Donec fermentum
                            </td>
                            <td>
                            Publicado
                            </td>
                            <td>
                            <i class="fas fa-arrow-up text-primary mr-3"></i>
                            <i class="fas fa-arrow-down text-danger mr-3"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Venenatis
                            </td>
                            <td>
                            Publicado
                            </td>
                            <td>
                            <i class="fas fa-arrow-up text-primary mr-3"></i>
                            <i class="fas fa-arrow-down text-danger mr-3"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Venenatis
                            </td>
                            <td>
                                Não publicado
                            </td>
                            <td>
                                <i class="fas fa-arrow-up text-primary mr-3"></i>
                                <i class="fas fa-arrow-down text-danger mr-3"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xl-6 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Criar nova</h6>
                    <h2 class="mb-0">Categoria</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Username</label>
                                    <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nova categoria" >
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <button class="btn btn-primary"> Criar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}



@endsection
