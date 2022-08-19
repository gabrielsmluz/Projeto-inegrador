@extends('layouts.layout')
@section('title','Produtos')
@section('main_content')
  <div class="d-flex justify-content-center">
    <div class="d-inline-flex justify-content-start bg-secondary bg-opacity-10 rounded border border-success border-3 p-1">
      <h2>Visualização de Produtos</h2>
    </div class="">
  </div>
  <div class="d-flex flex-column container-lg">

    <div class="d-flex justify-content-end p-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalProduto">Adicionar Novo Produto</button>
      <div class="modal fade" id="ModalProduto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalProduto" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalCardapioLabel">Novo Produto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex flex-column">
                <div class="d-flex flex-row">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" class="form-control" placeholder="Brigadeiro" aria-label="nome1" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Preço, R$:</span>
                    <input type="text" class="form-control" placeholder="123,456" aria-label="preco1" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div class="d-flex w-75 input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Descrição</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
                  <div class="d-flex w-25 justify-content-center">
                    <div class="d-flex align-self-center flex-row">
                      <p>
                        Disponível:
                      </p>
                      <label class="d-flex toggle justify-content-center m-1" for="myToggle">
                        <input class="toggle__input" name="" type="checkbox" id="myToggle">
                        <div class="toggle__fill"></div>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>
                  <div class="d-flex w-50 border rounded-border m-3">
                    div para adicionar imagens(temp)
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center bg-secondary bg-opacity-10 border-success border border-3 p-3 container-lg rounded">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Título/Produto</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Disponibilidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>
              <label class="d-flex toggle justify-content-center m-1" for="myToggle">
                <input class="toggle__input" name="" type="checkbox" id="myToggle">
                <div class="toggle__fill"></div>
              </label>
            </td>
            <td>
              <button type="button" class="btn btn-success">Success</button>
            </td>
            <td>
              <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#modaltab">
                <img src="edit2.png" alt="" height=30 width="30" class="">
              </button>
              <div class="modal fade" id="modaltab" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaltab" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalCardapioLabel">Editar Produto</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" placeholder="Brigadeiro" aria-label="nome1" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Preço, R$:</span>
                            <input type="text" class="form-control" placeholder="123,456" aria-label="preco1" aria-describedby="basic-addon1">
                          </div>
                        </div>
                        <div class="d-flex flex-row">
                          <div class="d-flex w-75 input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Descrição</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                          </div>
                          <div class="d-flex w-25 justify-content-center">
                            <div class="d-flex align-self-center flex-row">
                              <p>
                                Disponível:
                              </p>
                              <label class="d-flex toggle justify-content-center m-1" for="myToggle">
                                <input class="toggle__input" name="" type="checkbox" id="myToggle">
                                <div class="toggle__fill"></div>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex flex-row">
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>
                          <div class="d-flex w-50 border rounded-border m-3">
                            div para adicionar imagens(temp)
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img src="lixeira.png" alt="" height=30 width="30" class="">
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Tem Certeza que deseja deletar esse cardápio?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-evenly">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-danger">Sim, Remover</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>sabonete</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
