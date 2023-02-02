var utilidades={
    fechas:{
        nombre_mes:function(mes){
            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio",
                "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            return meses[mes-1];
        }
    },

    servidor:
    {
        crear_url:function(ref)
        {
            pathArray = location.href.split( '/' );
            protocol = pathArray[0]+'/'+pathArray[1];
            host = pathArray[2];
            url = protocol + '/' + host + '/' + pathArray[3] + '/' + ref;
            return url;
        }
    }

};

$(function(){
    $('.tooltip').tooltip({
        position:{
            my: 'left center',
            at: 'right+10 center',
            collision:'none'
        },
        tooltipClass:'right'
    });
});