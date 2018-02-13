
<script>

import { Bar } from 'vue-chartjs'

export default {
extends: Bar,
mounted () {
  // Overwriting base render method with actual data.
  this.renderChart({
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [
      {
        label: 'Siniestros ',
        backgroundColor: ['rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 90, 95, 1)',
        'rgba(11, 57, 84, 1)',
        'rgba(20, 111, 49, 1)',
        'rgba(104, 69, 153, 1)',
        'rgba(14, 71, 73, 1)',
        'rgba(111, 104, 102, 1)',
        'rgba(244, 68, 46, 1)',
        'rgba(23, 104, 172, 1)',],
        data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11],


      },
    ]
  },{
    maintainAspectRatio: false,
    responsive:true,
    scales: {
      yAxes: [{
        gridLines: {
          display:true
        },
        ticks: {
          // maxTicksLimit:10,
          min:0,
        }
      }],
      xAxes: [ {
        gridLines: {
          display:true
        },
        categoryPercentage: 0.9,
        barPercentage: 0.5
      }]
    },
  })
}
}
</script>
