const labels = ['January', 'February', 'March', 'April', 'May', 'June'];
const data = {
  labels: labels,
  datasets: [{
    label: 'Revenue',
    backgroundColor: 'rgba(54, 162, 235, 0.5)',
    borderColor: 'rgb(54, 162, 235)',
    data: [1000, 1500, 1200, 1800, 2000, 1600],
  }]
};

// Configuration options
const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

// Initialize the chart
var myChart = new Chart(
    document.getElementById('myChart'),
    config
);