@extends('layouts.app')
@section('content')
<div class="container-fluid col-4">
    <div class="row justify-content-center">
        <form action="store" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput1" class="form-label">Номер Сетификата</label>
                <input type="text" class="form-control" name="number" id="formGroupExampleInput1" placeholder="Номер Сетификата">
                @error('number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Название курса</label>
                <input type="text" class="form-control" name="course" id="formGroupExampleInput2" placeholder="Название курса">
                @error('course')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">ФИО</label>
                <input type="text" class="form-control" name="name" id="formGroupExampleInput3" placeholder="ФИО">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput4" class="form-label">Дата завершения курса</label>
                <input type="date" class="form-control" name="date" id="formGroupExampleInput4" placeholder="Дата завершения курса">
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Получить сертификат</button>
              </div>
        </form>
      </div>
  </div>
@endsection
