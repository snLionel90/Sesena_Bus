var lineas = new Array()
lineas [1] = ["Seleccione una linea","110 Urbano Seseña", "VAC231 Madrid-Seseña","423 Madrid(Est. Sur)-Aranjuez",
                "429 Madrid(Legazpi)-Aranjuez (PAU Montaña)","VAC158 Madrid(Est.Sur) - Quintanar de la Orden",
                "N402 (Noctuno) Madrid(Atocha) - Aranjuez"]

var imagenes = new Array()
    imagenes[1] = new Array()
    imagenes[1][0] = []
    imagenes[1][1] = ["./imgs/ruta_urbano_seseña.jpg"]
    imagenes[1][2] = ["./imgs/interbus.jpg"]
    imagenes[1][3] = ["./imgs/linea423.jpg"]
    imagenes[1][4] = ["./imgs/linea429.jpg"] 
    imagenes[1][5] = ["./imgs/linea419.jpg"]
    imagenes[1][6] = ["./imgs/lineaN402.jpg"]


function eligeLinea(lista){
    var lineSelection = lista.bus_lines.selectedIndex;
    lista.lista_lineas.length = lineas[lineSelection].length;
    for (i=0; i < lista.lista_lineas.length; i++){
        lista.lista_lineas.options[i].text=lineas[lineSelection][i]
    }
}
function mostrarImagen(lista){
    var lineSelection= lista.bus_lines.selectedIndex;
    var image = lista.lista_lineas.selectedIndex;
    document.imagen.src = imagenes[lineSelection][image];
    document.imagen.style.display = "block";
}



