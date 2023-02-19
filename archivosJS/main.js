
const ctx = document.getElementById('myChart')
const names = ['Enero/Febrero', 'Marzo/Abril', 'Mayo/Junio', 'Julio/Agosto', 'Septiembre/Octubre','Noviembre/Diciembre']
const ages = [150, 89, 54, 120, 130,103]

const myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: names, datasets: [{
label: 'Ventas Generadas Bimestral Anual', data: ages, 
backgroundClor: [
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)', 
    'rgba(255, 206, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 159, 64, 0.2)'
    ],
    borderColor: [
    'rgba(255, 99, 132, 1)',
    'rgba(54, 162, 235, 1)',
    'rgba(255, 206, 86, 1)',
    'rgba(75, 192, 192, 1)',
    'rgba(153, 102, 255, 1)',
    'rgba(255, 159, 64, 1)'
],borderWidth:1.5
}]
}
})