@extends('layouts.master')

@section('content')
<header>
        <nav>
            <ul class="grid-x">
                <a class="font-bold scroll float-center large-4" href="#1"><li>Login</li></a>
                <a class="font-bold float-center large-4" href="{{url('/')}}"><li>Ínicio</li></a>
                <a class="font-bold scroll float-center large-4" href="#2" id="funciona"><li>Cadastro</li></a>
            </ul>
        </nav>
    </header>
    <main class="grid-x" id="topo">
        <div class="sessao-um large-12 small-12 medium-12">
                <div class="sessao-um-opacity">          
                      
                    <h1 class="logo">GUIA DA BAIXADA | Entrar</h1>
                    <a class="down" href="#0">
                        <img src="{{asset('images/down-arrow.png')}}" alt="Descer" class="logo descer">
                    </a>
                </div>
        </div>
            
        <div class="fundo-preto large-12 medium-12 small-12 grid-x">
            <div class="paragrafo-box large-8 medium-8 small-12 grid-container" id="0">
                <h1 class="font-bold titulo text-center" id="1">LOGIN</h1>     
                    <div class="grid-x texto">
                        <div class="grid-x large-6 medium-12 small-10 box-login">
                            <label>Email:</label>
                            <input type="email" class="large-12 small-12 medium-12">
                            <label>Senha:</label>
                            <input type="password" class="large-12 small-12 medium-12">
                            <div class="large-12 small-12 medium-12 grid-x">
                                    <div class=" box-botao-comecar float-center ">
                                        <br>
                                        <a href="{{url('places')}}" class="botao-comecar hvr-linha-esquerda" style="">ENTRAR »</a>
                                    </div>
                                </div>  
                        </div>
                    </div> 
            </div>
        </div>

        <div class="sessao-dois large-12 small-12 medium-12">
                <div class="sessao-um-opacity"></div>
        </div>

        <div class="fundo-preto large-12 grid-x">
            <div class="paragrafo-box large-8 medium-12 small-12 grid-container">
                <h1 class="font-bold titulo text-center" id="2">CADASTRO</h1>   
                <div class="grid-x texto">
                        <div class="grid-x large-6 medium-12 small-10 box-login">
                            <div class="grid-x large-12 medium-12 small-12 float-center">                                
                                <label>Nome:</label>
                                <input type="text" class="large-12 small-12 medium-12">
                            </div>
                            <div class="grid-x large-12 medium-12 small-12 float-center">
                                <label>Email:</label>
                                <input type="email" class="large-12 small-12 medium-12">
                            </div>
                            <div class="grid-x large-12 medium-12 small-12 float-center">                                
                                <label>Senha:</label>
                                <input type="password" class="large-12 small-12 medium-12">
                            </div>
                            <div class="grid-x large-12 medium-12 small-12 float-center">
                                <label>Confirme sua senha:</label>
                                <input type="password" class="large-12 small-12 medium-12">
                            </div>
                            <div class="large-12 small-12 medium-12 grid-x">
                                    <div class=" box-botao-comecar float-center ">
                                        <br>
                                        <a href="{{url('pesquisa')}}" class="botao-comecar hvr-linha-esquerda" style="">ENTRAR »</a>
                                    </div>
                                </div>  
                        </div>
                    </div> 
            </div>
        </div>    
        <div class="botao-subir large-1">
                <a class="down" href="#topo">
                    <img src="{{asset('images/down-arrow.png')}}" alt="Descer" class="logo subir">
                </a>
        </div>
    </main>   
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