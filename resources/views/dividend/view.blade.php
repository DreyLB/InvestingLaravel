@extends('layouts.main')

@section('title', 'Dividendo')

@section('content')

<section>
  <div class="container my-5">
    <table class="table table-bordered bg-table-acoes text-center">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Janeiro</th>
                <th>Fevereiro</th>
                <th>Março</th>
                <th>Abril</th>
                <th>Maio</th>
                <th>Junho</th>
                <th>Julho</th>
                <th>Agosto</th>
                <th>Setembro</th>
                <th>Outubro</th>
                <th>Novembro</th>
                <th>Dezembro</th>
                <th>Total Empresas</th>
            </tr>
        </thead>
        <tbody>
            <!-- Adicione os dados das empresas aqui -->
            <tr>
                <td>ALUP11</td>
                <td>R$ 0,84</td>
                <td>R$ 4,61</td>
                <td></td>
                <td></td>
                <td></td>
                <td>R$ 7,92</td>
                <td>R$ 2,51</td>
                <td></td>
                <td></td>
                <td></td>
                <td>R$ 5,74</td>
                <td>R$ 4,17</td>
                <td>R$ 19,21</td>
            </tr>
            <tr>
                <td>TAEE11</td>
                <td></td>
                <td></td>
                <td>R$ 2,94</td>
                <td></td>
                <td></td>
                <td>R$ 0,46</td>
                <td></td>
                <td>R$ 3,23</td>
                <td>R$ 0,32</td>
                <td>R$ 0,32</td>
                <td>R$ 0,32</td>
                <td>R$ 0,32</td>
                <td>R$ 17,93</td>
            </tr>
            <!-- Repetir os dados para outras empresas -->
            <tr class="highlight-total">
                <td>TOTAL</td>
                <td>R$ 32,54</td>
                <td>R$ 20,21</td>
                <td>R$ 41,95</td>
                <td>R$ 23,98</td>
                <td>R$ 28,46</td>
                <td>R$ 28,77</td>
                <td>R$ 23,98</td>
                <td>R$ 28,09</td>
                <td>R$ 29,50</td>
                <td>R$ 22,81</td>
                <td>R$ 28,02</td>
                <td>R$ 35,35</td>
                <td>R$ 355,25</td>
            </tr>
        </tbody>
    </table>
  </div>
</section>

@endsection
