document.addEventListener("DOMContentLoaded", function () {
  const profileWallet = document.getElementById("profileWallet");

  if (profileWallet !== null) {
    // Function to fetch balance trends
    async function fetchBalanceTrends() {
      try {
        const response = await fetch("/balance-trends");
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        const data = await response.json();

        // Create the chart with fetched data
        createChart(data.labels, data.datasets.income, data.datasets.expenses);
      } catch (error) {
        console.error("Error fetching balance trends:", error);
      }
    }

    // Function to create the chart
    function createChart(labels, incomeData, expensesData) {
      const config = {
        type: "line",
        data: {
          labels: labels,
          datasets: [
            {
              label: "Income",
              backgroundColor: "rgba(93, 120, 255, 0.9)",
              borderColor: "transparent",
              data: incomeData,
              lineTension: 0,
              pointRadius: 0,
              borderWidth: 2,
            },
            {
              label: "Expenses",
              backgroundColor: "rgba(240, 243, 255, 1)",
              borderColor: "transparent",
              data: expensesData,
              lineTension: 0,
              borderWidth: 1,
              pointRadius: 0,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            xAxes: [
              {
                gridLines: {
                  display: false,
                  drawBorder: true,
                },
                ticks: {
                  fontColor: "#8a909d",
                  fontFamily: "Rubik, sans-serif",
                },
              },
            ],
            yAxes: [
              {
                gridLines: {
                  display: false,
                  color: "rgba(0,0,0,0.071)",
                  zeroLineColor: "rgba(0,0,0,0.071)",
                },
                ticks: {
                  stepSize: 50,
                  fontColor: "#8a909d",
                  fontFamily: "Rubik, sans-serif",
                },
              },
            ],
          },
          tooltips: {
            mode: "index",
            intersect: false,
            titleFontColor: "#888",
            bodyFontColor: "#555",
            titleFontSize: 12,
            bodyFontSize: 15,
            backgroundColor: "rgba(256,256,256,0.95)",
            displayColors: true,
            xPadding: 10,
            yPadding: 7,
            borderColor: "rgba(220, 220, 220, 0.9)",
            borderWidth: 2,
            caretSize: 6,
            caretPadding: 5,
          },
        },
      };

      const ctx = profileWallet.getContext("2d");
      new Chart(ctx, config);
    }

    // Fetch data and initialize the chart
    fetchBalanceTrends();
  }
});
