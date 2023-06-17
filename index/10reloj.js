(function () {
  let actualizarHora = function () {
    let fecha = new Date;
    horas = fecha.getHours(), ampm,
    minutos = fecha.getMinutes(),
    segundos = fecha.getSeconds(),
    diaSemana = fecha.getDay(),
    dia = fecha.getDate(),
    mes = fecha.getMonth(),
    year = fecha.getFullYear();

    let pHoras = document.getElementById('horas');
    let pAMPM = document.getElementById('ampm');
    let pMinutos = document.getElementById('minutos');
    let pSegundos = document.getElementById('segundos');
    let pDiaSemana = document.getElementById('diaSemana');
    let pDia = document.getElementById('dia');
    let pMes = document.getElementById('mes');
    let pYear = document.getElementById('year');
// ---------------------------------------------
    let semana = [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

    pDiaSemana.textContent = semana[diaSemana];
    
// ---------------------------------------------
pDia.textContent = dia;
// ---------------------------------------------
    let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    pMes.textContent = meses[mes];
    
// ---------------------------------------------
    pYear.textContent = year;
// ---------------------------------------------
    if (horas > 12) {
      horas = horas - 12;
      ampm = 'PM';
    }
    else {
      ampm = 'AM';
    };
//---------------------------------------------
    pHoras.textContent = horas;

  
    if (minutos < 10) {
      minutos = "0" + minutos;
    };
    pMinutos.textContent = minutos;
    
    if (segundos < 10) {
      segundos = "0" + segundos;
    };
    pSegundos.textContent = segundos;

    pAMPM.textContent = ampm;
    
// ---------------------------------------------

  };

  actualizarHora();
let intervalo = setInterval(actualizarHora, 1000)

}());

