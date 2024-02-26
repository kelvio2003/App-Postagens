@extends('paginas.principal')


@section('titolo','Ver postagens')

@section('conteudo')

<style>
      .bg-darkgrey {
        background-color: rgb(34, 33, 33);
        
      }
      input{

        width:50%;
      }
    </style>
<h1 class="text-center text-primary" style="font-family: 'Arial', sans-serif;">Optimo Evento!</h1>

<div class="row">
   
      <div class="col-lg-8 col-md-4 col-sm-6">
        <div class="card bg-darkgrey text-white">
          <img src="/img/1.jpg" class="card-img-top" alt="Imagem do Evento 1">
          <div class="card-body">
            <h5 class="card-title">{{$postes->titolo}}</h5>
            <p class="card-text">{{$postes->descricao}}</p>
            <p class="card-text text-muted">{{$postes->data}}</p>
          
            @foreach($postes->oferta as $ofertas)
            <p>{{$ofertas}}</p>
            @endforeach
          </div>
          <a class="btn btn-primary"  href="/edit/{{$postes->id}}">Editar Evento</a>
          <form action="/ver/{{$postes->id}}" method="post">
@csrf
@method('DELETE')
          <button class="btn btn-danger">Apagar Evento</button>
          </form>
          
        
        </div>
     
      </div>
            <br>


@endsection