var lampada = {
  
    ligada: false,
    
    elemento: document.getElementById('myimage'),
    
    acender: function() {
        this.elemento.src = "../img/lampada-on.gif";
        this.ligada = true;
    },
    
    apagar: function() {
        this.elemento.src = "../img/lampada-off.gif";
        this.ligada = false;
    }
}


lampada.elemento.onclick = function() {
    if (lampada.ligada) {
        lampada.apagar();
    } else {
        lampada.acender();
    }
}