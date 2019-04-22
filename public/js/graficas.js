function cambiar_fecha_grafica(){

    var mes_sel=$("#mes_sel").val();
    cargar_grafica_barras(mes_sel);
}



function cargar_grafica_barras(mes){

var options={
	 chart: {
	 	    renderTo: 'grafica',
            type: 'column'
        },
        title: {
            text: 'Registros mensuales de 2019'
        },
        subtitle: {
            text: 'Source: ayudapedia'
        },
        xAxis: {
            categories: [],
             title: {
                text: 'dias del mes'
            },
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'REGISTROS AL DIA'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'registros',
            data: []

        }]
}

$("#div_grafica_barras").html();

var url = "grafica/"+mes;

$.get(url,function(resul){
var datos= $.parseJSON(resul);
var totaldias=datos.totaldias;
var registrosdia=datos.registrosdia;
var i=0;

	for(i=1;i<=totaldias;i++){
	
	options.series[0].data.push( registrosdia[i] );
	options.xAxis.categories.push(i);

	}


 //options.title.text="aqui e podria cambiar el titulo dinamicamente";
 chart = new Highcharts.Chart(options);

})


}
