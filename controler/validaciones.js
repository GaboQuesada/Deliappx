// funciones de validacion

 function esVacido (obj) {
        var isEmpty = false;
        if (typeof obj === 'undefined' || obj === null || obj === '') {
            isEmpty = true;
        }

        if (typeof obj === 'number' && isNaN(obj)) {
            isEmpty = true;
        }

        if (obj instanceof Date && isNaN(Number(obj))) {
            isEmpty = true;
        }

        return isEmpty;
    }


// objeto validar

function objPrm(tipo, value) {
    this.tipo = tipo;
    this.value = value;
}

// objeto respuesta

function objRes(nombre, msj,est)
{
    this.nombre = nombre;
    this.msj = msj;
    this.est = est;
    
}

// funcion que recorre el array
function validarEsVacido(obj){
    
    
    var respuesta;
    
    
    
 for (var i =0; i < obj.length ; i++){
     
     nn = new objPrm();
     nn= obj[i];
   if(esVacido(nn.value)){ return respuesta = new objRes(nn.tipo, "esta Vacido","ko"); }
 }
   return respuesta = new objRes("", "listo","ok"); 
    
    
}


// ejemplos

//var datos = new Array();
//var nombre = new objPrm("carro","trooper");
//datos.push(micarro);
//var micarro2 = new objPrm("carro","");
//datos.push(micarro2);

//otra forma
//var datos = new Array(micarro,micarro2,micarro3);
