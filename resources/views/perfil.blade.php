@extends('layouts.master')

@section('content')
<header>
        <nav>
            <ul class="grid-x">
            <a class="font-bold large-4 small-4 medium-4" href="{{url('/')}}">
                <li>Ínicio</li>
            </a>
            <a class="font-bold large-4 small-4 medium-4" href="{{url('/places')}}">
                <li>Ver locais</li>
            </a>
            <a class="font-bold large-4 small-4 medium-4" href="{{url('/')}}">
                <li>Sair</li>
            </a>
            </ul>
        </nav>
    </header>
    <main class="grid-x" id="topo">
        <div class="sessao-um large-12 small-12 medium-12">
                <div class="sessao-um-opacity">            
                    <h1 class="logo">GUIA DA BAIXADA | Perfil</h1>
                    <a class="down" href="#0">
                        <img src="images/down-arrow.png" alt="Descer" class="logo descer">
                    </a>
                </div>
        </div>
            
        <div class="fundo-preto large-12 medium-12 small-12 grid-x">
            <div class="paragrafo-box large-12 medium-12 small-12 grid-container" id="0">
                <h1 class="font-bold titulo text-center" id="1">Perfil</h1>     
                <h5 class="font-bold titulo text-center">Locais favoritos</h5>
                <div class="grid-x texto">
                    <div class="large-12 small-12 medium-12 grid-x">
                        <div class="large-3 medium-5 small-8 grid-x box-resultado">
                            <div class="imagem-local large-6 medium-6 small-6">
                                <p>IMAGEM DO LOCAL</p>
                            </div>
                            <div class="large-8 medium-8 small-8 texto-local">
                                <p>
                                    <span>Nome:</span><br>
                                    Balada New Village<br>
                                    <span>Horário:</span><br>
                                    22h00 até 05h00 <br>
                                    <span>Telefone:</span><br> 
                                    (XX) - XXXX-XXXX
                                </p>
                                <br>
                                <a rel="modal:open" href="#local1">Veja mais sobre o local</a>
                                
                                <div id="local1" class="modal">                                  
                                    <div class="like-content">                                        
                                        <button class="btn-secondary like-review">
                                            <i class="fi-heart" aria-hidden="true"></i> Você gostou disso!
                                        </button>                                        
                                    </div>
                                    <a href="https://goo.gl/maps/BKhUmBCQzJYKFx9L8" target="_blank"><img src="images/foto-maps.PNG" class="float-center" alt="Foto Maps"></a>
                                    <p>
                                        <span>Nome:</span><br>
                                        Balada New Village<br>
                                        <span>Horário:</span><br>
                                        22h00 até 05h00 <br>
                                        <span>Telefone:</span><br> 
                                        (XX) - XXXX-XXXX <br>
                                        <span>Endereço:</span><br>
                                        Av. Pres. Wilson, 50 - José Menino <br> Santos - SP, 11065-200 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="large-3 medium-5 small-8  grid-x box-resultado">
                            <div class="imagem-local large-6 medium-6 small-6">
                                <p>IMAGEM DO LOCAL</p>
                            </div>              
                            <div class="large-8 medium-8 small-8 texto-local">
                                <p>
                                <span>Nome:</span><br>
                                    Balada Tremendão<br>
                                <span>Horário:</span><br>
                                    22h00 até 05h00<br>
                                <span>Telefone:</span><br> 
                                    (XX) - XXXX-XXXX
                                </p>
                                <br>
                                <a rel="modal:open" href="#local1">Veja mais sobre o local</a>
                            </div>                  
                        </div>
                        <div class="large-3 medium-5 small-8 grid-x box-resultado">
                            <div class="imagem-local large-6 medium-6 small-6">
                                 <p>IMAGEM DO LOCAL</p>
                            </div>    
                            <div class="large-8 medium-8 small-8 texto-local">
                                <p> 
                                <span>Nome:</span><br>
                                    Balada The Joy<br>
                                <span>Horário:</span><br>
                                    22h00 até 05h00<br>
                                <span>Telefone:</span><br> 
                                    (XX) - XXXX-XXXX
                                </p>
                                <br>
                                <a rel="modal:open" href="#local1">Veja mais sobre o local</a>
                            </div>
                        </div>                        
                    </div>                 
                </div> 
            </div>
        </div>

        <div class="sessao-dois large-12 small-12 medium-12">
                <div class="sessao-um-opacity"></div>
        </div>
        <div class="fundo-preto large-12 medium-12 small-12 grid-x">
            <div class="paragrafo-box large-8 medium-8 small-12 grid-container" id="0">
                <h5 class="font-bold text-center titulo">Altere seus dados</h5>    
                <div class="grid-x texto">
                    <div class="grid-x large-10 medium-12 small-10 box-login">
                        <div class="grid-x large-5 medium-5 small-12 float-center">                                
                            <label>Nome:</label>
                            <input type="text" class="large-12 small-12 medium-12">
                        </div>
                        <div class="grid-x large-5 medium-5 small-12 float-center">
                            <label>Email:</label>
                            <input type="email" class="large-12 small-12 medium-12">
                        </div>
                        <div class="grid-x large-5 medium-5 small-12 float-center">                                
                            <label>Nova senha:</label>
                            <input type="password" class="large-12 small-12 medium-12">
                        </div>
                        <div class="grid-x large-5 medium-5 small-12 float-center">
                            <label>Confirme sua nova senha:</label>
                            <input type="password" class="large-12 small-12 medium-12">
                        </div>
                        <div class="large-12 small-12 medium-12 grid-x">
                                <div class=" box-botao-comecar float-center ">
                                    <br>
                                    <a href="#" class="botao-comecar" style="">ALTERAR »</a>
                                </div>
                            </div>  
                    </div>
                </div> 
            </div>
        <div class="botao-subir large-1">
                <a class="down" href="#topo">
                    <img src="images/down-arrow.png" alt="Descer" class="logo subir">
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