@extends('layouts.master')

@section('content')
<header>
    <nav class="menu-ativo">
        <ul class="grid-x">
            <a class="font-bold large-4 small-4 medium-4" href="{{url('/')}}">
                <li>Ínicio</li>
            </a>
            <a class="font-bold large-4 small-4 medium-4" href="{{url('/perfil')}}">
                <li>Ver perfil</li>
            </a>
            <a class="font-bold large-4 small-4 medium-4" href="{{url('/')}}">
                <li>Sair</li>
            </a>
        </ul>
    </nav>
</header>
<div class="sessao-um fundo-maps large-12 small-12 medium-12" id="topo">
    <div class="sessao-um-opacity">
        <div id="map" style="position: relative;top: 15vh;bottom: 5vh;">
        </div>
    </div>
</div>
<div class="fundo-preto grid-x">
    <br>
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informações do local</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="infoLocal"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="paragrafo-box large-12 medium-12 small-12 grid-container grid-x">
        <select id="locais" class="large-6 medium-6 small-6" style="display: block; margin: 0 auto 20px auto">
            <option value="" disabled selected>Selecione um local
            <option value="restaurant">Restaurantes</option>
            <option value="bar">Bar</option>
            <option value="meal_delivery">Entrega de comida</option>
            <option value="cafe">Café</option>
            <option value="night_club">Baladas</option>
            <option value="shopping_mall">Shopping</option>
            <option value="liquor_store">Loja de Bebida</option>
        </select>
        <h4 class="large-12 medium-12 small-12 text-center">Locais por perto</h4>
        <div id="places" class="texto grid-x"></div>
        <br>
        <div class="box-btn">
            <button class="button" id="more">Mais locais</button>
        </div>
    </div>
</div>
        <div class="botao-subir large-1">
                <a class="down" href="#topo">
                    <img src="images/down-arrow.png" alt="Descer" class="logo subir">
                </a>
        </div>
<div class="fundo-preto large-12 small-12 medium-12 grid-x">
    <div class="paragrafo-box hr large-8 small-11 medium-8 grid-container"></div>
</div>
<footer class="grid-x footer">
    <p class="large-6 medium-6 small-6 float-center text-center">
        © Copyright 2019. Todos os direitos reservados. <br>
        guiadabaixada@gmail.com
    </p>
    <p class="large-12 medium-12 small-12 dev-by text-center">
        Desenvolvido por <a href="https://blzpedro.github.io/portfolio" target="_blank"
            style="color: white;font-weight: bold;">Pedro Melo</a> e Gabriel Costa.
    </p>
</footer>
@endsection
