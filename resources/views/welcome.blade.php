@extends('layout')

@section('title', 'Welcome to Timelines')

@section('content')

<div class="container">

	<header class="jumbotron" my-4>
    	<h1 class="display-3">Bem vindo ao Timelines!</h1>
     	<p class="lead">Este aplicativo ajuda você a comparar diferentes linhas de tempo. Você pode desde comparar os principais movimentos do mercado financeiro com eventos como reuniões do FED, até mesmo organizar sua vida intelectual comparando os principais marcos da vida de James Joyce com todos os acontecimentos da revolução Irlandesa.</p>
      <div class="text-center">
        <a href="/timelines" class="btn btn-primary btn-lg">Criar uma Timeline!</a>
      </div>
	</header>

<!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('/img/james_joyce_cropped.jpg')}}" alt="">
            <div class="card-body">
              <h4 class="card-title">Literatura</h4>
              <p class="card-text">Organize sua vida intelectual comparando a vida de grandes escritores com os eventos políticos que os cercaram.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('/img/stock_markets.jpg')}}" alt="">
            <div class="card-body">
              <h4 class="card-title">Mercado Financeiro</h4>
              <p class="card-text">Compare os principais eventos do mercado financeiro e aumente a sua capacidade de previsão.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('/img/herodoto_cropped.jpg')}}" alt="">
            <div class="card-body">
              <h4 class="card-title">História</h4>
              <p class="card-text">Aumente o seu conhecimento conectando fatos históricos e compreendendo melhor a História como um todo.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('/img/snow_patrol.jpg')}}" alt="">
            <div class="card-body">
              <h4 class="card-title">Artistas</h4>
              <p class="card-text">Acompanhe o desenvolvimento do seu artista preferido e entenda a relação de sua obra com o seu ambiente.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

</div>

@endsection
