@extends('layouts.admin');

@section('content')
<div class="content">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">slug</th>
        <th scope="col">content</th>
        <th scope="col">published</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Thornton</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>the Bird</td>
        <td>the Bird</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection