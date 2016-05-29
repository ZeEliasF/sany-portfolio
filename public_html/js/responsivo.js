

function responsivo() {
    if (window.innerWidth < 480){
        $("#menu-cabecalho").hide(300, "swing");
        $(".logoCabecalho").addClass("logoCabecalhoReduzido");
        $(".logoCabecalhoTexto").addClass("logoCabecalhoTextoReduzido");
        $(".conteudoTitulo").addClass("conteudoTituloReduzido");
        $(".apresentacao").addClass("apresentacaoReduzida");
        $(".conteudoTituloPerna").hide(300,"swing");
        $("main").css("top","20px");
        $("footer").addClass("rodapeReduzido");
    }else if (window.innerWidth < 800) {
        $("#menu-cabecalho").hide(300, "swing");
        $(".logoCabecalho").removeClass("logoCabecalhoReduzido");
        $(".logoCabecalhoTexto").removeClass("logoCabecalhoTextoReduzido");
        $(".conteudoTituloPerna").show(300,"swing");
        $(".apresentacao").removeClass("apresentacaoReduzida");
        $(".conteudoTitulo").removeClass("conteudoTituloReduzido");
        $("main").css("top","55px");
        $("footer").removeClass("rodapeReduzido");
    } else if (window.innerWidth < 1900) {
        $("#menu-cabecalho").show(300, "swing");
        $("#menu-cabecalho").removeClass("menu-cabecalhoMaior");
    } else {
        $("#menu-cabecalho").addClass("menu-cabecalhoMaior");
    }
    
    var fonte = window.innerWidth*0.025;
    if(fonte < 19){
        fonte = 19;
    }
    
    var tamApresentacaoImg = window.innerWidth*0.07815;
    if(tamApresentacaoImg < 58){
        tamApresentacaoImg = 58;
    }
    $(".apresentacao img").css("width",tamApresentacaoImg+"px");
    $("body").css("font-size",fonte+"pt");

    $(".disciplina").each(function () {
        var largura = $(this).css("width");
        largura = largura.replace(/px/gi, '');

        var fonte = largura * 0.1;



        $(this).css({"height": largura + "px", "font-size": fonte + "px"});
        $(this).children("a").css({"height": largura + "px", "width": largura + "px"});

        $(this).children("a").children(".disciplinaTexto").css("line-height", fonte + "px");
        var alturaTexto = $(this).children("a").children(".disciplinaTexto").css("height");



        alturaTexto = alturaTexto.replace(/px/gi, '');
        var padding;
        if (alturaTexto > fonte) {
            padding = (largura - fonte * 2) / 2;
        } else {
            padding = (largura - fonte) / 2;
        }


        $(this).children("a").children(".disciplinaTexto").css("padding", padding + "px 0");
    });
}