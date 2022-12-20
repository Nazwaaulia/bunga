@extends('layout')
@section('content')
<div class="container mt-5 d-flex justify-content-center">
<div class="card" style="width: 20 rem;">
    <a class="d-flex justify-content-center"><img src="/assets/img/wk.jpeg" alt="" width="80px"></a>
    <div class="card-header" style="position: relative">
      <h5 class="plants Report">plants Report</h5>
      <a href="/create"><button class="btn btn-primary" style="position: absolute; top: 0; right: 10px;">create</button></a>
      <p class="card-text">all ons plants Report.</p>
    </div> <div class="button">
    </div>
      <h3>counts</h3>
      <table class="table table-striped table-bordered">
        {{-- <thead> --}}
          <tr>
            <th scope="col">no</th>
            <th scope="col" style="width: 5px">kode</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">growth</th>
            <th scope="col">action</th>
          </tr>
        {{-- </thead> --}}
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>B001</td>
            <td>eceng</td>
            <td>tunas</td>
            <td>Tunas</td>
            <td>
              <form action="/destroy/{{}}" method="post"></form>
              <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
              <a href="" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
            </td>
          </tr>
            </td>
          </tr>
          </tr>
        </tbody>
      </table>
  </div>
</div>  
@endsection
