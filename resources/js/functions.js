$(document).ready(function(){
    /* ---------- Form contato ---------- */	
        
        $("#btn-enviar").click(function(e){
    
            var dados = $("#r-form").serialize();
            
            if($("#nome").val() == "")
            {
                $("#erro-nome").fadeIn(300);
                $("#erro-nome").delay(2000).fadeOut(1000);
            }
            
            else
            {
                $("#erro-nome").fadeOut(300);
                
                if($("#email").val() == "")
                {
                    $("#erro-email").delay(300).fadeIn(300);
                    $("#erro-email").delay(2000).fadeOut(1000);
                    
                }
                
                else
                {
                    $("#erro-email").fadeOut(300);
                        
                    if($("#tel").val() == "")
                    {
                        $("#erro-telefone").delay(300).fadeIn(300);
                        $("#erro-telefone").delay(2000).fadeOut(1000);
                    }	
                    else
                    {
                        $("#erro-telefone").fadeOut(300);
                            
                        if($("#assunto").val() == ""){
                            $("#erro-assunto").delay(300).fadeIn(300);
                            $("#erro-assunto").delay(2000).fadeOut(1000);
                        }	
                    
                    else
                    {
                        $("#erro-telefone").fadeOut(300);
                        
                        if($("#mensagem").val() == "")
                        {
                            $("#erro-mensagem").delay(300).fadeIn(300);
                            $("#erro-mensagem").delay(2000).fadeOut(1000);
                        }
    
                        else
                        {
                            $("#erro-mensagem").fadeOut(300)
                            $("#success").delay(300).fadeIn(300);
                            $("#success").delay(3000).fadeOut(1000);
    
                            $.ajax({
                                type: "POST", 
                                url: "scripts/form.php", 
                                dataType:"html", 
                                data:dados, 
                                success:function(e){                             
                                    $("#nome").val("");
                                    $("#email").val("");
                                    $("#tel").val("");
                                    $("#assunto").val("");
                                    $("#mensagem").val("");
                                }
                            });
    
                        }
                        
                    }
                    
                }
            }
        }
            
    });	
        
    /* ------------------------------------------------------------ Responsive --------------------------------------------------------- */
    /* ---------- Contato ---------- */	
        
        $("#r-btn-enviar").click(function(e){
    
            var dados = $("#r-form").serialize();
            
            if($("#nome").val() == "")
            {
                $("#erro-nome").fadeIn(300);
                $("#erro-nome").delay(2000).fadeOut(1000);
            }
            
            else
            {
                $("#erro-nome").fadeOut(300);
                
                if($("#email").val() == "")
                {
                    $("#erro-email").delay(300).fadeIn(300);
                    $("#erro-email").delay(2000).fadeOut(1000);
                }
                
                else
                {
                    $("#erro-email").fadeOut(300);
                        
                    if($("#tel").val() == ""){
                        $("#erro-telefone").delay(300).fadeIn(300);
                        $("#erro-telefone").delay(2000).fadeOut(1000);
                    }	
    
                    else
                    {
                        $("#erro-telefone").fadeOut(300);
                            
                        if($("#assunto").val() == ""){
                            $("#erro-assunto").delay(300).fadeIn(300);
                            $("#erro-assunto").delay(2000).fadeOut(1000);
                        }	
                        
                    else
                    {	
                        $("#erro-telefone").fadeOut(300);	
                        
                        if($("#mensagem").val() == "")
                        {
                            $("#erro-mensagem").delay(300).fadeIn(300);
                            $("#erro-mensagem").delay(2000).fadeOut(1000);
                        }
    
                        else
                        {
                            $("#erro-mensagem").fadeOut(300)
                            
                            $("#success").delay(300).fadeIn(300);
                            $("#success").delay(3000).fadeOut(1000);
    
                            $.ajax({
    
                                type: "POST", 
                                url: "scripts/form.php", 
                                dataType:"html", 
                                data:dados, 
                                success:function(e){                              
                                    $("#nome").val("");
                                    $("#email").val("");
                                    $("#tel").val("");
                                    $("#assunto").val("");
                                    $("#mensagem").val("");
                                }
    
                            });
                            }
                        }			
                    }	
                }
            }
        });	
    
        ScrollReveal().reveal('.titulo', { delay: 500, duration: 1000 });
        ScrollReveal().reveal('.texto', { delay: 750, duration: 1000});
    
        $(".scroll").click(function(e){			
            event.preventDefault();		
            $("html, body").animate({scrollTop: $($(this).attr('href')).offset().top - 50}, 800);		
        });
    
        $(".down").click(function(e){			
            event.preventDefault();		
            $("html, body").animate({scrollTop: $($(this).attr('href')).offset().top - 50}, 800);		
        });
    
        $("nav li").click(function(e){		
            $("nav li").removeClass("ativo");		
            $(this).addClass("ativo");				
        });
    
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 550) {
                $('nav').addClass('header-fixo');
            }
            else {
                $('nav').removeClass('header-fixo');
            }
        });
    
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 600) {
                $('.botao-subir').css('display', 'block');
            }
            else {
                $('.botao-subir').css('display', 'none');
            }
        });
        $(function(){
            $(document).one('click', '.like-review', function(e) {
                $(this).html('<i class="fi-heart" aria-hidden="true"></i> Você gostou disso!');
                $(this).children('.fi-heart').addClass('animate-like');
            });           
        });
    });
    