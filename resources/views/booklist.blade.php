@foreach($book as $key => $data)
    <tr>
      <td>{{$data->bookname}}</td>
      <td><img src="{{$data->bookimage}}" /></td>
      <td>{{$data->bookaudio}}</td>
      <td>{{$data->bookauthor}}</td>
    </tr>
@endforeach
