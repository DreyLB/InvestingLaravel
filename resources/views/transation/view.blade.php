@extends('layouts.main')

@section('title', 'Compra/Venda')

@section('content')

<section>
  <div class="container transation my-5">

    <div class="transation-element">
        <!-- Tabela Principal -->
        <div class="row mb-4">
          <div class="col-md-6">
            <table class="table table-transation table-bordered text-center">
              <thead>
                <tr class="table-header">
                  <th colspan="3">HASH11</th>
                </tr>
                <tr class="table-subheader">
                  <th>Data</th>
                  <th>Quantidade</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20/12</td>
                  <td>2</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>21/12</td>
                  <td>2</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>22/12</td>
                  <td>2</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>23/12</td>
                  <td>2</td>
                  <td>100</td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="table-subheader">
                  <td>Total</td>
                  <td>8</td>
                  <td>400</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <!-- Informações Complementares -->
        <div class="row">
          <div class="col-md-4">
            <table class="table table-bordered">
              <tbody>
                <tr class="highlight-green">
                  <td>Hoje</td>
                  <td colspan="2">R$ 100,00</td>
                </tr>
                <tr class="highlight-green">
                  <td>Preço Médio</td>
                  <td colspan="2">R$ 50,00</td>
                </tr>
                <tr class="highlight-green">
                  <td>Lucro/Prejuízo</td>
                  <td colspan="2">100,00%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Botão para abrir o modal -->
        <a class="btn btn-primary compra-venda" data-bs-toggle="modal" data-bs-target="#operationModal">Comprar/Vender</a>

        <!-- Modal -->
        <div class="modal fade text-white" id="operationModal" tabindex="-1" aria-labelledby="operationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="operationModalLabel">Realizar Operação - HASH11</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="operationForm">
                  <input type="hidden" id="operationType" name="operationType"> <!-- Campo oculto para tipo de operação -->
                  <div class="mb-3">
                    <label for="operationDate" class="form-label">Data</label>
                    <input type="date" class="form-control text-white" id="operationDate" required>
                  </div>
                  <div class="mb-3">
                    <label for="operationQuantity" class="form-label">Quantidade</label>
                    <input type="number" class="form-control text-white" id="operationQuantity" min="1" required>
                  </div>
                  <div class="mb-3">
                    <label for="operationValue" class="form-label">Valor</label>
                    <input type="number" class="form-control text-white" id="operationValue" step="0.01" min="0" required>
                  </div>
                  <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary" id="buyButton">Comprar</button>
                    <button type="button" class="btn btn-danger" id="sellButton">Vender</button>
                  </div>
                </form>
              </div>
            </div>
        </div>

      </div>
    </div>

    <div class="transation-element">
      <!-- Tabela Principal -->
      <div class="row mb-4">
        <div class="col-md-6">
          <table class="table table-transation table-bordered text-center">
            <thead>
              <tr class="table-header">
                <th colspan="3">HASH11</th>
              </tr>
              <tr class="table-subheader">
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>21/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>22/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>23/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="table-subheader">
                <td>Total</td>
                <td>8</td>
                <td>400</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- Informações Complementares -->
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered">
            <tbody>
              <tr class="highlight-green">
                <td>Hoje</td>
                <td colspan="2">R$ 100,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Preço Médio</td>
                <td colspan="2">R$ 50,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Lucro/Prejuízo</td>
                <td colspan="2">100,00%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Botão para abrir o modal -->
      <a class="btn btn-primary compra-venda" data-bs-toggle="modal" data-bs-target="#operationModal">Comprar/Vender</a>

      <!-- Modal -->
      <div class="modal fade text-white" id="operationModal" tabindex="-1" aria-labelledby="operationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="operationModalLabel">Realizar Operação - HASH11</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="operationForm">
                <input type="hidden" id="operationType" name="operationType"> <!-- Campo oculto para tipo de operação -->
                <div class="mb-3">
                  <label for="operationDate" class="form-label">Data</label>
                  <input type="date" class="form-control text-white" id="operationDate" required>
                </div>
                <div class="mb-3">
                  <label for="operationQuantity" class="form-label">Quantidade</label>
                  <input type="number" class="form-control text-white" id="operationQuantity" min="1" required>
                </div>
                <div class="mb-3">
                  <label for="operationValue" class="form-label">Valor</label>
                  <input type="number" class="form-control text-white" id="operationValue" step="0.01" min="0" required>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary" id="buyButton">Comprar</button>
                  <button type="button" class="btn btn-danger" id="sellButton">Vender</button>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </div>

    <div class="transation-element">
      <!-- Tabela Principal -->
      <div class="row mb-4">
        <div class="col-md-6">
          <table class="table table-transation table-bordered text-center">
            <thead>
              <tr class="table-header">
                <th colspan="3">HASH11</th>
              </tr>
              <tr class="table-subheader">
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>21/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>22/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>23/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="table-subheader">
                <td>Total</td>
                <td>8</td>
                <td>400</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- Informações Complementares -->
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered">
            <tbody>
              <tr class="highlight-green">
                <td>Hoje</td>
                <td colspan="2">R$ 100,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Preço Médio</td>
                <td colspan="2">R$ 50,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Lucro/Prejuízo</td>
                <td colspan="2">100,00%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Botão para abrir o modal -->
      <a class="btn btn-primary compra-venda" data-bs-toggle="modal" data-bs-target="#operationModal">Comprar/Vender</a>

      <!-- Modal -->
      <div class="modal fade text-white" id="operationModal" tabindex="-1" aria-labelledby="operationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="operationModalLabel">Realizar Operação - HASH11</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="operationForm">
                <input type="hidden" id="operationType" name="operationType"> <!-- Campo oculto para tipo de operação -->
                <div class="mb-3">
                  <label for="operationDate" class="form-label">Data</label>
                  <input type="date" class="form-control text-white" id="operationDate" required>
                </div>
                <div class="mb-3">
                  <label for="operationQuantity" class="form-label">Quantidade</label>
                  <input type="number" class="form-control text-white" id="operationQuantity" min="1" required>
                </div>
                <div class="mb-3">
                  <label for="operationValue" class="form-label">Valor</label>
                  <input type="number" class="form-control text-white" id="operationValue" step="0.01" min="0" required>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary" id="buyButton">Comprar</button>
                  <button type="button" class="btn btn-danger" id="sellButton">Vender</button>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </div>

    <div class="transation-element">
      <!-- Tabela Principal -->
      <div class="row mb-4">
        <div class="col-md-6">
          <table class="table table-transation table-bordered text-center">
            <thead>
              <tr class="table-header">
                <th colspan="3">HASH11</th>
              </tr>
              <tr class="table-subheader">
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>21/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>22/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>23/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="table-subheader">
                <td>Total</td>
                <td>8</td>
                <td>400</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- Informações Complementares -->
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered">
            <tbody>
              <tr class="highlight-green">
                <td>Hoje</td>
                <td colspan="2">R$ 100,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Preço Médio</td>
                <td colspan="2">R$ 50,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Lucro/Prejuízo</td>
                <td colspan="2">100,00%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Botão para abrir o modal -->
      <a class="btn btn-primary compra-venda" data-bs-toggle="modal" data-bs-target="#operationModal">Comprar/Vender</a>

      <!-- Modal -->
      <div class="modal fade text-white" id="operationModal" tabindex="-1" aria-labelledby="operationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="operationModalLabel">Realizar Operação - HASH11</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="operationForm">
                <input type="hidden" id="operationType" name="operationType"> <!-- Campo oculto para tipo de operação -->
                <div class="mb-3">
                  <label for="operationDate" class="form-label">Data</label>
                  <input type="date" class="form-control text-white" id="operationDate" required>
                </div>
                <div class="mb-3">
                  <label for="operationQuantity" class="form-label">Quantidade</label>
                  <input type="number" class="form-control text-white" id="operationQuantity" min="1" required>
                </div>
                <div class="mb-3">
                  <label for="operationValue" class="form-label">Valor</label>
                  <input type="number" class="form-control text-white" id="operationValue" step="0.01" min="0" required>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary" id="buyButton">Comprar</button>
                  <button type="button" class="btn btn-danger" id="sellButton">Vender</button>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </div>

    <div class="transation-element">
      <!-- Tabela Principal -->
      <div class="row mb-4">
        <div class="col-md-6">
          <table class="table table-transation table-bordered text-center">
            <thead>
              <tr class="table-header">
                <th colspan="3">HASH11</th>
              </tr>
              <tr class="table-subheader">
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>21/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>22/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>23/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="table-subheader">
                <td>Total</td>
                <td>8</td>
                <td>400</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- Informações Complementares -->
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered">
            <tbody>
              <tr class="highlight-green">
                <td>Hoje</td>
                <td colspan="2">R$ 100,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Preço Médio</td>
                <td colspan="2">R$ 50,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Lucro/Prejuízo</td>
                <td colspan="2">100,00%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Botão para abrir o modal -->
      <a class="btn btn-primary compra-venda" data-bs-toggle="modal" data-bs-target="#operationModal">Comprar/Vender</a>

      <!-- Modal -->
      <div class="modal fade text-white" id="operationModal" tabindex="-1" aria-labelledby="operationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="operationModalLabel">Realizar Operação - HASH11</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="operationForm">
                <input type="hidden" id="operationType" name="operationType"> <!-- Campo oculto para tipo de operação -->
                <div class="mb-3">
                  <label for="operationDate" class="form-label">Data</label>
                  <input type="date" class="form-control text-white" id="operationDate" required>
                </div>
                <div class="mb-3">
                  <label for="operationQuantity" class="form-label">Quantidade</label>
                  <input type="number" class="form-control text-white" id="operationQuantity" min="1" required>
                </div>
                <div class="mb-3">
                  <label for="operationValue" class="form-label">Valor</label>
                  <input type="number" class="form-control text-white" id="operationValue" step="0.01" min="0" required>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary" id="buyButton">Comprar</button>
                  <button type="button" class="btn btn-danger" id="sellButton">Vender</button>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </div>

    <div class="transation-element">
      <!-- Tabela Principal -->
      <div class="row mb-4">
        <div class="col-md-6">
          <table class="table table-transation table-bordered text-center">
            <thead>
              <tr class="table-header">
                <th colspan="3">HASH11</th>
              </tr>
              <tr class="table-subheader">
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>21/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>22/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
              <tr>
                <td>23/12</td>
                <td>2</td>
                <td>100</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="table-subheader">
                <td>Total</td>
                <td>8</td>
                <td>400</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- Informações Complementares -->
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered">
            <tbody>
              <tr class="highlight-green">
                <td>Hoje</td>
                <td colspan="2">R$ 100,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Preço Médio</td>
                <td colspan="2">R$ 50,00</td>
              </tr>
              <tr class="highlight-green">
                <td>Lucro/Prejuízo</td>
                <td colspan="2">100,00%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Botão para abrir o modal -->
      <a class="btn btn-primary compra-venda" data-bs-toggle="modal" data-bs-target="#operationModal">Comprar/Vender</a>

      <!-- Modal -->
      <div class="modal fade text-white" id="operationModal" tabindex="-1" aria-labelledby="operationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="operationModalLabel">Realizar Operação - HASH11</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="operationForm">
                <input type="hidden" id="operationType" name="operationType"> <!-- Campo oculto para tipo de operação -->
                <div class="mb-3">
                  <label for="operationDate" class="form-label">Data</label>
                  <input type="date" class="form-control text-white" id="operationDate" required>
                </div>
                <div class="mb-3">
                  <label for="operationQuantity" class="form-label">Quantidade</label>
                  <input type="number" class="form-control text-white" id="operationQuantity" min="1" required>
                </div>
                <div class="mb-3">
                  <label for="operationValue" class="form-label">Valor</label>
                  <input type="number" class="form-control text-white" id="operationValue" step="0.01" min="0" required>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary" id="buyButton">Comprar</button>
                  <button type="button" class="btn btn-danger" id="sellButton">Vender</button>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </div>



  </div>
</section>


<script>
  // Referência aos botões
  const buyButton = document.getElementById("buyButton");
  const sellButton = document.getElementById("sellButton");
  const operationTypeField = document.getElementById("operationType");

  // Adicionando eventos aos botões
  buyButton.addEventListener("click", () => {
      operationTypeField.value = "Compra";
      document.getElementById("operationForm").submit(); // Submete o formulário com o tipo "Compra"
  });

  sellButton.addEventListener("click", () => {
      operationTypeField.value = "Venda";
      document.getElementById("operationForm").submit(); // Submete o formulário com o tipo "Venda"
  });
</script>



@endsection
