
const ctx = document.getElementById('mahasiswaChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Pendidikan bahasa & sastra indonesia', 'Pendidikan bahasa inggris', 'pendidikan seni drama tari dan musik'],
        datasets: [{
            label: '# of Votes',
            data: [120, 190, 100],
            backgroundColor: [
                '#10002B','#3C096C','#FF9E00',
            ],
            borderColor: [
                'white'
            ],
            borderWidth: 1,
            cutout:'70%'
        }]
    },
    options: {
        plugins: {
            legend: {
                position: 'bottom',
                align: 'start',
            }
        },
        layout:{
        }
    }
});

