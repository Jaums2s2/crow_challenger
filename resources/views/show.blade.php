@extends('templates.template')

@section('content')
<h1 class="text-center title-panel">Visualizar</h1>
<hr>
<div class="col-8 m-auto">
    <h1 class="text-center name">{{$candidate->nome}}</h1>
    <div class="row mt-4">
        <label class="title">Contatos:</label>
        <div class="col-6">
            <label class="panel-item">Email: {{$candidate->email}}</label>
        </div>
        <div class="col-3">
            <label class="panel-item">Celular: {{$candidate->celular}}</label>
        </div>
        <div class="col-3">
            <label class="panel-item">Telefone: {{$candidate->telefone}}</label>
        </div>
    </div>
    <div class="row mt-4">
        <label class="title">Endereço Residencial</label>
        <div class="col-3">
            <label class="panel-item">CEP: {{$candidate->cep}}</label>
        </div>
        <div class="col-4">
            <label class="panel-item">Rua: {{$candidate->rua}}</label>
        </div>
        <div class="col-2">
            <label class="panel-item">Nº: {{$candidate->numero}}</label>
        </div>  
         <div class="col-3">
            <label class="panel-item">Bairro: {{$candidate->bairro}}</label>
        </div>
      
    </div>
    <div class="row mt-3">
  
       <div class=col-3>
            <label class="panel-item">Cidade: {{$candidate->cidade}}</label>
        </div>
        <div class="col-2">
            <label class="panel-item">UF: {{$candidate->uf}}</label>
        </div> 
         <div class="col-5">
            <label class="panel-item">Logr.: {{$candidate->logradouro}}</label>
        </div>
        <div class="col-2">
            <label class="panel-item">Comple.: {{$candidate->complemento}}</label>
        </div>    
    </div>
    <label class="text-center title mt-4">Resumo da entrevista(*)</label>
    <textarea class="form-control" type="text" name="resumo" id="resumo" rows="6" disabled
        required>{{$candidate->resumo}}</textarea>
</div>
@stop