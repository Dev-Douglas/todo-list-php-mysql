document.addEventListener('DOMContentLoaded', function () {
  new Chart(document.getElementById('chart'), {
    type: 'doughnut',
    data: {
      labels: ['concluídas', 'pendentes', 'vencidas'],
      datasets: [
        {
          label: 'Total',
          data: [9, 18, 4],
          backgroundColor: ['rgb(25, 135, 84)', 'rgb(255, 193, 7)', 'rgb(220, 53, 69)'],
          borderWidth: 5,
          hoverOffset: 4,
        },
      ],
    },

    options: {
      plugins: {
        legend: {
          display: false,
        },
      },
      maintainAspectRatio: false,
      cutoutPercentage: 75,
    },
  })
})
