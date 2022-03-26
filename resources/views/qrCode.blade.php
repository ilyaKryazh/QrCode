@extends('layouts.app')
@section('content')
    <div class="visible-print text-center">
        <h1>Просканируйте для получения</h1>

        {!! QrCode::size(250)->generate(url('/') . '/certificates/'. session()->get('certificate_id')); !!}

    </div>
@endsection


