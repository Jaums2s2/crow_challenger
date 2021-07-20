@extends('templates.template')

@section('content')
<h1 class="text-center title-panel">@if(isset($candidate)) Editar @else Adicionar Candidato @endif</h1>
<hr>
<div class="col-8 m-auto">

    @if(isset($errors) && count($errors)>0)
    <div class="text-cente mt-4 mb-4 p-5 alert-danger">
        @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif

    @if(isset($candidate))
    <form name="formEdit" id="formEdit" method="post" action="{{url("candidates/$candidate->id")}}">
        @method('PUT')
        @else
        <form name="formCad" id="formCad" method="post" action="{{url('candidates')}}">
            @endif
            @csrf
            <label class="form-label title">Nome do Candidato(*)</label>
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Candidato"
                value="{{$candidate->nome ?? ''}}" required>
            <div class="row mt-4">
                <h1>Contatos:</h1>
                <div class="col-4">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{$candidate->email ?? ''}}">
                </div>
                <div class="col-4">
                    <label class="form-label">Celular</label>
                    <input class="form-control" type="text" name="celular" id="celular"
                        value="{{$candidate->celular ?? ''}}" maxlength="11">
                </div>
                <div class="col-4">
                    <label class="form-label">Telefone(*)*</label>
                    <input class="form-control" type="text" name="telefone" id="telefone"
                        value="{{$candidate->telefone ?? ''}}" maxlength="10">
                </div>
            </div>
            <div class="row mt-4">
                <h1>Endereço Residencial</h1>
                <div class="col-2">
                    <label class="form-label">CEP(*)</label>
                    <input class="form-control" type="text" name="cep" id="cep" placeholder="00000-000" maxlength="8"
                        value="{{$candidate->cep ?? ''}}" size="10" maxlength="9" onblur="pesquisacep(this.value);"
                        required>
                </div>
                <div class="col-8">
                    <label class="form-label">Rua(*)</label>
                    <input class="form-control" type="text" name="rua" id="rua" value="{{$candidate->uf ?? ''}}"
                        maxlength="2" required>
                </div>
                <div class="col-2">
                    <label class="form-label">Numero(*)</label>
                    <input class="form-control" type="text" name="numero" id="numero"
                        value="{{$candidate->numero ?? ''}}" required>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-3">
                    <label class="form-label">Bairro(*)</label>
                    <input class="form-control" type="text" name="bairro" id="bairro" value="{{$candidate->uf ?? ''}}"
                        maxlength="2" required>
                </div>
                <div class=col-3>
                    <label class="form-label">Cidade(*)</label>
                    <input class="form-control" type="text" name="cidade" id="cidade"
                        value="{{$candidate->cidade ?? ''}}" required>
                </div>
                <div class="col-1">
                    <label class="form-label">UF(*)</label>
                    <input class="form-control" type="text" name="uf" id="uf" value="{{$candidate->uf ?? ''}}"
                        maxlength="2" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Lougrado</label>
                    <input class="form-control" type="text" name="logradouro" id="logradouro"
                        value="{{$candidate->logradouro ?? ''}}">
                </div>
                <div class="col-2">
                    <label class="form-label">Complemento</label>
                    <input class="form-control" type="text" name="complemento" id="complemento"
                        placeholder="Complemento" value="{{$candidate->complemento ?? ''}}">
                </div>
            </div>
            <label class="form-label">Resumo da entrevista(*)</label>
            <textarea class="form-control" type="text" name="resumo" id="resumo"
                rows="6" required>{{$candidate->resumo ?? ''}}</textarea>
            <button class="btn btn-dark mt-2" type="submit" value="cadastra">@if(isset($candidate)) Editar @else
                Cadastar
                @endif</button>
        </form>
</div>
@stop