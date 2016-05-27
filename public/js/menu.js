/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function mostrarDropdown(elemento) {
        $(elemento).parent().children(".menuDropdown").addClass("menuDropdownVisivel");
}

function esconderDropdown(elemento) {
    $(elemento).children().removeClass("menuDropdownVisivel");
}


