@foreach($tabela as $obj)
  <tr>
    <td>{{$obj->PrimeiroNome}}</td>
    <td>{{$obj->Sobrenome}}</td>
  </tr>
@endforeach
