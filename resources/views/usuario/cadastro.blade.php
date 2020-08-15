@extends('layout.base')

@section('titulo', 'Cadastro de usuário')

@section('conteudo')
<form action="{{ route('salvar') }}" method="POST">
    {{ csrf_field() }}

    <div class="field">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        @if($errors->has('nome'))
            @foreach ($errors->get('nome') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif

    </div>

    <div class="field">
        <label for="email">Email:</label>
        <input type="text" name="email">

        @if($errors->has('email'))
            @foreach ($errors->get('email') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif
    </div>

    <div class="field">
        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        @if($errors->has('senha'))
            @foreach ($errors->get('senha') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif
    </div>

    <div class="btn">
        <button type="submit">Salvar</button>
    </div>

</form>
@endsection