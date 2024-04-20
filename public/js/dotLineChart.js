//setup
const DATA_COUNT = 7;
const NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};

const labels = months({count: 7});
const data3 = {
  labels: labels,
  datasets: [
    {
      label: 'Dataset 1',
      data: numbers(NUMBER_CFG),
      borderColor: Utils.CHART_COLORS.red,
      backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
      yAxisID: 'y',
    },

    {
        label: 'Dataset 2',
        data: numbers(NUMBER_CFG),
        borderColor: Utils.CHART_COLORS.blue,
        backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),
        yAxisID: 'y1',
      }
    ]
  };

//config
  const config3 = {
    type: 'line',
    data: data3,
    options: {
      responsive: true,
      interaction: {
        mode: 'index',
        intersect: false,
      },
      stacked: false,
      plugins: {
        title: {
          display: true,
          text: 'Chart.js Line Chart - Multi Axis'
        }
      },

      scales: {
        y: {
          type: 'linear',
          display: true,
          position: 'left',
        },
        y1: {
          type: 'linear',
          display: true,
          position: 'right',
  
          // grid line settings
          grid: {
            drawOnChartArea: false, // only want the grid lines for one axis to show up
          },
        },
      }
    },
};

//action
const actions = [
    {
      name: 'Randomize',
      handler(chart) {
        chart.data.datasets.forEach(dataset => {
          dataset.data = Utils.numbers({count: chart.data.labels.length, min: -100, max: 100});
        });
        chart.update();
      }
    },
  ];

  // Initialize the chart
var myChart3 = new Chart(
    document.getElementById('myChart3'),
    config3
);