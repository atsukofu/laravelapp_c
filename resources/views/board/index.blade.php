@extends('layouts.helloapp')

@section('menubar')
  @parent
  ボード・ページ
@endsection

@section('content')
  <table>
    <tr><th>Data</th><tr>Name</tr></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->message}}</td>
        <td>{{$item->person->name}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 tsuyano.
@endsection