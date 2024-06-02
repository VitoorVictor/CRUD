@extends('layouts.app')

@section('title')

Fornecedores

@endsection

@section('content')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-md-2 col-3"><button class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</button></div>
            <div class="col-md-8 col-6 text-center">
                <h1>Área dos <strong class="text-primary">FORNECEDORES</strong></h1>
            </div>
            <div class="col-md-2 col-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">RAZÃO SOCIAL</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">EMAIL</th>
                    <th></th>
                    <th scope="col"><button class="btn btn-outline-success ">ADD<i class="bi bi-plus px-3 py-2"></i></button></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($fornecedores as $fornecedor)
                <tr>
                    <th scope="row">{{ $fornecedor->id}}</th>
                    <td>{{$fornecedor->razao_social}}</td>
                    <td>{{$fornecedor->cnpj}}</td>
                    <td>{{$fornecedor->email}}</td>
                    <td><button class="btn btn-outline-danger">EDITAR<i class="bi bi-trash-fill px-1 py-2"></i></button></td>
                    <td><button class="btn btn-outline-warning">DELETAR<i class="bi bi-pencil-fill px-1 py-2"></i></button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>       
    </div>
@endsection