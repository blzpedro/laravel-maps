@extends('layouts.master')

@section('content')
    <article class="erro" id="erro-nome">Digite o seu nome</article>
    <article class="erro" id="erro-email">Digite o seu email</article>
    <article class="erro" id="erro-telefone">Digite o seu telefone</article>
    <article class="erro" id="erro-assunto">Digite o assunto</article>
    <article class="erro" id="erro-mensagem">Digite a mensagem</article>
    <article class="success" id="success">Mensagem enviada com sucesso!</article>
    <header>
        <nav>
            <ul class="grid-x">
                <a class="font-bold scroll large-2 float-center" href="#1" id="home"><li>Comece agora</li></a>
                <a class="font-bold scroll large-2 float-center" href="#2" id="funciona"><li>Como funciona</li></a>
                <a class="font-bold scroll large-2 float-center" href="#3" id="funciona"><li>Quem somos</li></a>
                <a class="font-bold scroll large-2 float-center" href="#4" id="funciona"><li>Contato</li></a>
            </ul>
        </nav>
    </header>
    <main class="grid-x" id="topo">
        <div class="sessao-um large-12 small-12 medium-12">
                <div class="sessao-um-opacity">            
                    <h1 class="logo">GUIA DA BAIXADA</h1>
                    <a class="down" href="#0">
                        <img src="{{asset('images/down-arrow.png')}}" alt="Descer" class="logo descer">
                    </a>
                </div>
        </div>        
        <div class="fundo-preto large-12 grid-x">
            <div class="paragrafo-box large-8 grid-container" id="0">
                <h1 class="font-bold titulo" id="1">COMECE AGORA</h1>     
                <p class="texto">
                    Cras consectetur ut eros sed porttitor. Cras ut est vulputate lacus dictum molestie. Maecenas justo arcu, aliquam eget erat quis, ultrices pretium ex. In sodales justo quis finibus feugiat. <br><br>
                    Sed hendrerit maximus ex non laoreet. Quisque pellentesque consectetur nisi, ac sodales nulla bibendum et. Aliquam vel nisl egestas, aliquet tellus sed, pharetra mauris.
                    <br><br><br>
                    <a href="{{ url('login') }}" class="botao-comecar hvr-linha-esquerda">COMEÇAR A NAVEGAR NA PLATAFORMA »</a>
                </p>       
            </div>
        </div>

        <div class="sessao-dois large-12 small-12 medium-12">
                <div class="sessao-um-opacity"></div>
        </div>

        <div class="fundo-preto large-12 grid-x">
            <div class="paragrafo-box large-8 grid-container">
                <h1 class="font-bold titulo" id="2">COMO FUNCIONA</h1>     
                <p class="texto">
                    Cras consectetur ut eros sed porttitor. Cras ut est vulputate lacus dictum molestie. Maecenas justo arcu, aliquam eget erat quis, ultrices pretium ex. In sodales justo quis finibus feugiat. <br><br>
                    Sed hendrerit maximus ex non laoreet. Quisque pellentesque consectetur nisi, ac sodales nulla bibendum et. Aliquam vel nisl egestas, aliquet tellus sed, pharetra mauris.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis arcu arcu. Nulla vitae odio vitae erat placerat finibus nec a ante. Maecenas elementum justo ante, vel ultricies libero varius quis. <br><br>
                </p>       
            </div>
        </div>

        <div class="sessao-tres large-12 small-12 medium-12">
                <div class="sessao-um-opacity"></div>
        </div>
            
        <div class="fundo-preto large-12 small-12 medium-12 grid-x">
            <div class="paragrafo-box large-8 grid-container">
                    <h1 class="font-bold titulo" id="3">QUEM SOMOS</h1>     
                    <p class="texto">
                        Lorem ipsum dolor sit amet. <br><br>
                        Consectetur adipiscing elit. Integer facilisis arcu arcu. Nulla vitae odio vitae erat placerat finibus nec a ante. Maecenas elementum justo ante, vel ultricies libero varius quis.
                    </p>       
            </div>
        </div>
        <div class="fundo-preto large-12 small-12 medium-12 grid-x">
            <div class="paragrafo-box hr large-8 small-11 medium-8 grid-container"></div>
        </div>
        </div>
        <div class="sessao-quatro large-12 small-12 medium-12 grid-x grid-container">
                    <div class="large-3 small-6 medium-3 box-texto-comecar texto">
                        <h2 class="color-white font-bold">Navegue pela plataforma agora</h2>
                    </div>
                    <div class="large-3 small-6 medium-3 box-botao-comecar texto">
                        <p><a href="{{ url('login') }}" class="botao-comecar hvr-linha-esquerda">COMEÇAR »</a></p>
                    </div>
        </div>  
        <div class="fundo-preto large-12 small-12 medium-12 grid-x">
            <div class="paragrafo-box hr large-8 small-11 medium-8 grid-container"></div>
        </div>
        <div class="sessao-cinco large-12 small-12 medium-12 grid-x">
                <div class="large-4 medium-6 small-12 float-center">
                    <h1 class="font-bold color-white text-center titulo" id="4">CONTATO</h1>
                    <form method="post" action="https://formspree.io/phenriqmelo99@gmail.com" id="r-form" name="form">
                        <input type="text" name="nome" id="nome" placeholder="Nome:" autocomplete="off">
                        <input type="email" name="email" id="email" placeholder="E-mail:" autocomplete="off">
                        <input type="text" name="tel" id="tel" placeholder="Telefone:" autocomplete="off">
                        <input type="text" name="assunto" id="assunto" placeholder="Assunto:" autocomplete="off">
                        <textarea type="text" name="message" placeholder="Mensagem:" id="r-mensagem" cols="3" rows="5" autocomplete="off"></textarea>
                        <input id="r-btn-enviar" type="submit" value="ENVIAR MENSAGEM" class="hvr-linha-esquerda botao color-white font-bold">
                    </form>
                </div>
        </div>
        <!-- <form action="https://formspree.io/phenriqmelo99@gmail.com" method="POST">
            <input type="text" name="name">
            <input type="email" name="_replyto">
            <input type="submit" value="Send">
          </form>    -->
        <div class="botao-subir large-1">
                <a class="down" href="#topo">
                    <img src="{{asset('images/down-arrow.png')}}" alt="Descer" class="logo subir">
                </a>
        </div>
    </main>   
    <div class="fundo-preto large-12 small-12 medium-12 grid-x">
        <div class="paragrafo-box hr large-8 small-11 medium-8 grid-container"></div>
    </div>
    <footer class="grid-x footer">
        <p class="large-6 medium-6 small-6 float-center text-center">
            © Copyright 2019. Todos os direitos reservados. <br>
            guiadabaixada@gmail.com
        </p>
        <p class="large-12 medium-12 small-12 dev-by text-center">
            Desenvolvido por <a href="https://blzpedro.github.io/portfolio" target="_blank" style="color: white;font-weight: bold;">Pedro Melo</a> e Gabriel Costa.
        </p>
    </footer> 
@endsection