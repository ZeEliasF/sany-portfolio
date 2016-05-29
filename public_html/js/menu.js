

function mostrarDropdown(elemento) {
    $(elemento).parent().children(".menuDropdown").addClass("menuDropdownVisivel");
}

function esconderDropdown(elemento) {
    $(elemento).children().removeClass("menuDropdownVisivel");
}

function mostrarMenuCompacto() {
    $("#menu-compacto").addClass("menuCompactoVisivel");
    $("#menu-compacto").show(150);
    $(".menu-compacto-trigger").addClass("menuCompactoTriggerAtivo");
    $("#bloqueioPagina").show(150);
}

function esconderMenuCompacto() {
    $("#menu-compacto").removeClass("menuCompactoVisivel");
    $("#menu-compacto").hide(150);
    $(".menu-compacto-trigger").removeClass("menuCompactoTriggerAtivo");
    $("#bloqueioPagina").hide(150);
}

function mudarMenuCompacto() {
    if(!$("#menu-compacto").hasClass("menuCompactoVisivel")){
        mostrarMenuCompacto();
    } else {
        esconderMenuCompacto();
    }
}