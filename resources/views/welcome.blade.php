@extends('paginas.principal')


@section('titolo','Meu site de postagens')

@section('conteudo')

<style>
      .bg-darkgrey {
        background-color: rgb(34, 33, 33);
        
      }
      input{

        width:50%;
      }
    </style>

    
    <h1 class="text-center text-primary" style="font-family: 'Arial', sans-serif;">Bem Vindo ao seu site de postagens!</h1>
    
    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="d-flex" method="GET" action="welcome">
              @csrf
                <input type="search" class="form-control " placeholder="Pesquisar..." name="pesquisar">
                <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Pesquisar</button>
              </form>
            </div>
          </div>

         
        </div>
      </div>
    </section><!-- End Newsletter Section -->
  
<br>
    <div class="row">
        @foreach($postes as $poste)
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card bg-darkgrey text-white">
          <img src="/img/1.jpg" class="card-img-top" alt="Imagem do Evento 1">
          <div class="card-body">
            <h5 class="card-title">{{$poste->titolo}}</h5>
            <p class="card-text">{{$poste->descricao}}</p>
            <p class="card-text text-muted">{{$poste->data}}</p>
            <a href="/ver/{{$poste->id}}" class="btn btn-primary">Saber Mais</a>
          </div>
        
        </div>
     
      </div>
            
         @endforeach
    
      
      <!-- Adicione mais cards aqui, seguindo a mesma estrutura -->

  
@endsection