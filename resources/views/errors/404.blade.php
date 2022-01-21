@extends('layouts.erro')

@section('content')
<div class="text-center">
    <div>
        <h1 class="display-2 error-text fw-bold">4<i class="ri-ghost-smile-fill align-bottom text-primary mx-1"></i>4
        </h1>
    </div>
    <div>
        <h4 class="text-uppercase mt-4">Desculpe, página não encontrada</h4>
        <div class="mt-4">
            <a href="{{ route('record') }}" class="btn btn-primary"><i class="ri-arrow-left-line align-bottom mr-2"></i>Voltar</a>
        </div>
    </div>
</div>
@endsection
