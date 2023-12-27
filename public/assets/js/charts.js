document.addEventListener("DOMContentLoaded", function () {
  // Generate random data
  const data = Array.from({ length: 7 }, () => Math.floor(Math.random() * 100));

  // Chart configuration
  const lineConfig = {
    type: "bar",
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Random Data",
          backgroundColor: "rgba(75, 192, 192, 0.2)",
          borderColor: "rgba(75, 192, 192, 1)",
          data: data,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        x: {
          display: true,
          scaleLabel: {
            display: true,
            labelString: "Month",
          },
        },
        y: {
          display: true,
          scaleLabel: {
            display: true,
            labelString: "Value",
          },
        },
      },
    },
  };

  // Get canvas element by id
  const lineCtx = document.getElementById("tickets");

  // Ensure the canvas element and context are available
  if (!lineCtx) {
    console.error("Canvas element not found.");
  } else {
    // Create chart
    window.myLine = new Chart(lineCtx, lineConfig);
  }
});
