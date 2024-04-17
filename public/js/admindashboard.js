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

var canvas = document.getElementById('myChart');
  var ctx = canvas.getContext('2d');

  var data = [20, 30, 40, 50, 25, 35];

  // Draw the chart
  ctx.beginPath();
  ctx.moveTo(0, canvas.height);
  var barWidth = canvas.width / data.length;
  var x = 0;
  var i =0;
  for (i ; i < data.length; i++) {
    var barHeight = data[i];
    ctx.fillStyle = 'blue';
    ctx.fillRect(x, canvas.height - barHeight, barWidth - 2, barHeight);
    x += barWidth;
  }
  ctx.closePath();