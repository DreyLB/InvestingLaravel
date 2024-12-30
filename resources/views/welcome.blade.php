@extends('layouts.main')

@section('title', 'Investing')

@section('content')

<section>
  <div>
    <div class="mb-4 table-container">
      <table class="table table-bordered text-center">
        <thead>
          <tr class="bg-dark text-warning">
            <th colspan="2" class="text-white">IBOVESPA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2" class="bg-dark text-white fs-4">120.269,31</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div  class="table-container">
      <table class="table table-bordered text-center">
        <thead>
          <tr class="bg-dark text-warning">
            <th colspan="2" class="text-white">PATRIMÔNIO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2" class="bg-dark text-white">Total</td>
          </tr>
          <tr>
            <td colspan="2" class="bg-dark text-white fs-4">R$ 11.667,48</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container py-4">
    <div class="row g-3">
      <div class="col-6 text-center">
        <a href="#"><img src="/img/img-acoes.png" alt="Imagem 1" class="img-fluid"></a>
      </div>
      <div class="col-6 text-center">
        <a href="#"><img src="/img/img-acoes.png" alt="Imagem 2" class="img-fluid"></a>
      </div>
      <div class="col-6 text-center">
        <a href="#"><img src="/img/img-acoes.png" alt="Imagem 3" class="img-fluid"></a>
      </div>
      <div class="col-6 text-center">
        <a href="#"><img src="/img/img-acoes.png" alt="Imagem 4" class="img-fluid"></a>
      </div>
    </div>
  </div>
</section>

@endsection
