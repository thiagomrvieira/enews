@extends('template.app')

@section('content')
<div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="text-uppercase text-muted ls-1 mb-1">Todas as</h6>
                        <h2 class="mb-0">Publicações</h2>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <!-- tabela de posts -->
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Título</th>
                          <th scope="col">Categoria</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Publicado em</th>
                          <th scope="col">Ações</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            Lorem ipsum dolor sit amet
                          </th>
                          <td>
                            Donec fermentum
                          </td>
                          <td>
                            Publicado
                          </td>
                          <td>
                            20/10/2019
                          </td>
                          <td>
                            <i class="fas fa-arrow-up text-primary mr-3"></i>
                            <i class="fas fa-arrow-down text-danger mr-3"></i>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row">
                            Donec sagittis erat massa
                          </th>
                          <td>
                            Venenatis
                          </td>
                          <td>
                            Publicado
                          </td>
                          <td>
                            22/10/2019
                          </td>
                          <td>
                            <i class="fas fa-arrow-up text-primary mr-3"></i>
                            <i class="fas fa-arrow-down text-danger mr-3"></i>
                          </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Etiam aliquet metus et velit elementum suscipit
                            </th>
                            <td>
                                Venenatis
                            </td>
                            <td>
                                Não publicado
                            </td>
                            <td>
                                22/10/2019
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
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Rascunhos</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Tabela de rascunhos -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Page name</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Unique users</th>
                    <th scope="col">Bounce rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      /argon/
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      340
                    </td>
                    <td>
                        <a href="#!" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/index.html
                    </th>
                    <td>
                      3,985
                    </td>
                    <td>
                      319
                    </td>
                    <td>
                        <a href="#!" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/charts.html
                    </th>
                    <td>
                      3,513
                    </td>
                    <td>
                      294
                    </td>
                    <td>
                        <a href="#!" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/tables.html
                    </th>
                    <td>
                      2,050
                    </td>
                    <td>
                      147
                    </td>
                    <td>
                        <a href="#!" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/profile.html
                    </th>
                    <td>
                      1,795
                    </td>
                    <td>
                      190
                    </td>
                    <td>
                        <a href="#!" class="btn btn-sm btn-primary">Editar</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Categorias</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Ver todas</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Tabela de categorias -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Publicações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                        Donec fermentum
                    </th>
                    <td>
                      1,480
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                        Venenatis
                    </th>
                    <td>
                      5,480
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                        Phasellus pulvinar
                    </th>
                    <td>
                      4,807
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                        Nunc pulvinar
                    </th>
                    <td>
                      2,645
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


@endsection
