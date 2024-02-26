@extends('paginas.principal')


@section('titolo','Criar  postagens')

@section('conteudo')

<style>

  button{

    width: 100%;
    
  }
</style>
<h1 class="text-center text-primary" style="font-family: 'Arial', sans-serif;">Criar Eventos!</h1>
<form action="/cadastramentos" method="POST">
    @csrf
      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control"  required name="titolo" placeholder="Digite o título do evento">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao"  required rows="3" placeholder="Digite a descrição do evento"></textarea>
      </div>
      <div class="form-group">
        <label for="data">Data</label>
        <input type="date" class="form-control"  required  name="data">
      </div>

      <div class="form-group">
        <label for="titulo">Imagem do evento</label>
        <input type="file" class="form-control"  required  name="imagem" >
      </div>

      
      <div class="form-group">
        <label for="titulo">Ofertas</label>
        <br>
        <input type="checkbox"  required   name="oferta[]" value="Computadores Grátis">Computadores Grátis
        <br>
        <input type="checkbox"  required   name="oferta[]" value="Livros Grátis">Livros Grátis
        <br>
        <input type="checkbox"  required   name="oferta[]"value="Lanches">Lanches
        <br>
        <input type="checkbox"  required   name="oferta[]"value="Internet" >Internet
        <br>
        <input type="checkbox"   required   name="oferta[]" value="Outros">Outros
      
      </div>


      <button type="submit" class=" btn btn-primary">Criar Evento</button>
    </form>

  </div>

  <br>
@endsection