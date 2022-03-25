@extends('layouts.app')
@section('content')
<div class="container-fluid col-4">
    <div class="row justify-content-center">
        <form action="" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Номер Сетификата</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Номер Сетификата">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">ФИО</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ФИО">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Дата завершения курса</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Дата завершения курса">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Получить сертификат</button>
              </div>
        </form>
      </div>
  </div>
@endsection
