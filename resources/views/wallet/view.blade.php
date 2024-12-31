@extends('layouts.main')

@section('title', 'Carteira')

@section('content')

<section>
  <div class="container text-white my-5">
    <!-- Tabela Ações -->
    <h3>Ações</h3>
    <table class="table table-striped table-custom bg-table-acoes">
      <thead> 
        <tr>
          <th>#</th>
          <th>Empresa</th>
          <th>Nota</th>
          <th>Comp. Ideal</th>
          <th>Preço Atual</th>
          <th>Qtd</th>
          <th>Valor</th>
          <th>Preço Médio</th>
          <th>Composição Atual</th>
          <th>Diferença</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>ALUP11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 25,00</td>
          <td>10</td>
          <td>R$ 250,00</td>
          <td>R$ 24,50</td>
          <td>10,5%</td>
          <td class="highlight-green">+0,5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TAEE11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 32,00</td>
          <td>8</td>
          <td>R$ 256,00</td>
          <td>R$ 31,50</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>ALUP11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 25,00</td>
          <td>10</td>
          <td>R$ 250,00</td>
          <td>R$ 24,50</td>
          <td>10,5%</td>
          <td class="highlight-green">+0,5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TAEE11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 32,00</td>
          <td>8</td>
          <td>R$ 256,00</td>
          <td>R$ 31,50</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>ALUP11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 25,00</td>
          <td>10</td>
          <td>R$ 250,00</td>
          <td>R$ 24,50</td>
          <td>10,5%</td>
          <td class="highlight-green">+0,5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TAEE11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 32,00</td>
          <td>8</td>
          <td>R$ 256,00</td>
          <td>R$ 31,50</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>ALUP11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 25,00</td>
          <td>10</td>
          <td>R$ 250,00</td>
          <td>R$ 24,50</td>
          <td>10,5%</td>
          <td class="highlight-green">+0,5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TAEE11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 32,00</td>
          <td>8</td>
          <td>R$ 256,00</td>
          <td>R$ 31,50</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
      </tbody>
    </table>

    <!-- Tabela FIIs -->
    <h3>FIIs</h3>
    <table class="table table-striped table-custom bg-table-fiis">
      <thead>
        <tr>
          <th>#</th>
          <th>FII</th>
          <th>Nota</th>
          <th>Comp. Ideal</th>
          <th>Preço Atual</th>
          <th>Qtd</th>
          <th>Valor</th>
          <th>Preço Médio</th>
          <th>Composição Atual</th>
          <th>Diferença</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>XPML11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 94,00</td>
          <td>5</td>
          <td>R$ 470,00</td>
          <td>R$ 93,00</td>
          <td>10,2%</td>
          <td class="highlight-green">+0,2%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TRXF11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 97,00</td>
          <td>4</td>
          <td>R$ 388,00</td>
          <td>R$ 96,00</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>XPML11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 94,00</td>
          <td>5</td>
          <td>R$ 470,00</td>
          <td>R$ 93,00</td>
          <td>10,2%</td>
          <td class="highlight-green">+0,2%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TRXF11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 97,00</td>
          <td>4</td>
          <td>R$ 388,00</td>
          <td>R$ 96,00</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>XPML11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 94,00</td>
          <td>5</td>
          <td>R$ 470,00</td>
          <td>R$ 93,00</td>
          <td>10,2%</td>
          <td class="highlight-green">+0,2%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TRXF11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 97,00</td>
          <td>4</td>
          <td>R$ 388,00</td>
          <td>R$ 96,00</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>XPML11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 94,00</td>
          <td>5</td>
          <td>R$ 470,00</td>
          <td>R$ 93,00</td>
          <td>10,2%</td>
          <td class="highlight-green">+0,2%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TRXF11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 97,00</td>
          <td>4</td>
          <td>R$ 388,00</td>
          <td>R$ 96,00</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>XPML11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 94,00</td>
          <td>5</td>
          <td>R$ 470,00</td>
          <td>R$ 93,00</td>
          <td>10,2%</td>
          <td class="highlight-green">+0,2%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>TRXF11</td>
          <td>10</td>
          <td>10%</td>
          <td>R$ 97,00</td>
          <td>4</td>
          <td>R$ 388,00</td>
          <td>R$ 96,00</td>
          <td>9,8%</td>
          <td class="highlight-red">-0,2%</td>
        </tr>
      </tbody>
    </table>

    <!-- Tabela Ações EUA -->
    <h3>Ações EUA</h3>
    <table class="table table-striped table-custom bg-table-stocks">
      <thead>
        <tr>
          <th>#</th>
          <th>Empresa</th>
          <th>Nota</th>
          <th>Comp. Ideal</th>
          <th>Preço Atual</th>
          <th>Qtd</th>
          <th>Valor (USD)</th>
          <th>Composição Atual</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
        <tr>
          <td>1</td>
          <td>MCD</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$293.62</td>
          <td>0.05</td>
          <td>$14.68</td>
          <td>6.5%</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MSFT</td>
          <td>10</td>
          <td>6.67%</td>
          <td>$255.68</td>
          <td>0.07</td>
          <td>$17.89</td>
          <td>6.8%</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

@endsection
