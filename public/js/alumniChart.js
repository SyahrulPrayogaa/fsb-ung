const ctx1 = document.getElementById('alumniChart').getContext('2d');
const myChart1 = new Chart(ctx1, {
    type: 'doughnut',
    data: {
        labels: ['Pendidikan bahasa & sastra indonesia', 'Pendidikan bahasa inggris', 'pendidikan seni drama tari dan musik'],
        datasets: [{
            label: '# of Votes',
            data: [90, 100, 50],
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
        }
    }
});

