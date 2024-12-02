/////////////////////////////////////////
//Income vs Expenses
/////////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
  const profileWallet = document.getElementById("expvsinc");

  if (profileWallet !== null) {
    const ctx = profileWallet.getContext("2d");

    // Chart configuration
    const config = {
      type: "line",
      data: {
        labels: [],
        datasets: [
          {
            label: "Expenses",
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            data: [],
            fill: true,
            lineTension: 0.1,
          },
          {
            label: "Income",
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            data: [],
            fill: true,
            lineTension: 0.1,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [
            {
              gridLines: {
                display: false,
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
      },
    };

    const myLine = new Chart(ctx, config);

    // Fetch data from the server based on the selected timeframe
    function fetchTransactionData(timeframe) {
      console.log(`Fetching data for: ${timeframe}`); // Debugging log
      fetch(`http://localhost:8080/transactionData?timeframe=${timeframe}`)
        .then((response) => {
          console.log("Server response:", response); // Debugging log
          if (!response.ok) throw new Error("Failed to fetch data");
          return response.json();
        })
        .then((data) => {
          console.log("Fetched data:", data); // Debugging log

          const labels = data.map((item) => item.date);
          const expenses = data.map((item) => item.expenses);
          const income = data.map((item) => item.income);

          // Update chart data
          config.data.labels = labels;
          config.data.datasets[0].data = expenses;
          config.data.datasets[1].data = income;

          // Update the chart
          myLine.update();
        })
        .catch((error) =>
          console.error("Error fetching transaction data:", error)
        );
    }

    // Add click event listeners to the area-chart-action spans
    const actions = document.querySelectorAll("#area-chart-action span");
    actions.forEach((action) => {
      action.addEventListener("click", function () {
        console.log(`Clicked: ${this.textContent.trim()}`);
        // Highlight the selected action
        actions.forEach((span) => span.classList.remove("active"));
        this.classList.add("active");

        // Fetch and update the chart data based on the clicked action
        const timeframe = this.textContent.trim().toLowerCase(); // day, week, month, year
        fetchTransactionData(timeframe);
      });
    });

    // Fetch initial data for "Day" by default
    fetchTransactionData("day");
  }
});

/////////////////////////////////////////
//Expenses
/////////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
  const profileWallet = document.getElementById("exps");

  if (profileWallet !== null) {
    const ctx = profileWallet.getContext("2d");

    // Chart configuration for expenses only
    const config = {
      type: "line",
      data: {
        labels: [],
        datasets: [
          {
            label: "Expenses",
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            data: [], // Only include expenses data
            fill: true,
            lineTension: 0.1,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [
            {
              gridLines: {
                display: false,
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
      },
    };

    const myLine = new Chart(ctx, config);

    // Fetch data from the server for expenses only
    function fetchTransactionData(timeframe) {
      console.log(`Fetching expenses data for: ${timeframe}`); // Debugging log
      fetch(`http://localhost:8080/transactionData?timeframe=${timeframe}`)
        .then((response) => {
          console.log("Server response:", response); // Debugging log
          if (!response.ok) throw new Error("Failed to fetch data");
          return response.json();
        })
        .then((data) => {
          console.log("Fetched data:", data); // Debugging log

          const labels = data.map((item) => item.date);
          const expenses = data.map((item) => item.expenses); // Only fetch expenses data

          // Update chart data
          config.data.labels = labels;
          config.data.datasets[0].data = expenses;

          // Update the chart
          myLine.update();
        })
        .catch((error) =>
          console.error("Error fetching transaction data:", error)
        );
    }

    // Add click event listeners to the area-chart-action spans
    const actions = document.querySelectorAll("#area-chart-action span");
    actions.forEach((action) => {
      action.addEventListener("click", function () {
        console.log(`Clicked: ${this.textContent.trim()}`);
        // Highlight the selected action
        actions.forEach((span) => span.classList.remove("active"));
        this.classList.add("active");

        // Fetch and update the chart data based on the clicked action
        const timeframe = this.textContent.trim().toLowerCase(); // day, week, month, year
        fetchTransactionData(timeframe);
      });
    });

    // Fetch initial data for "Day" by default
    fetchTransactionData("day");
  }
});

/////////////////////////////////////////
//Income
/////////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
  const profileWallet = document.getElementById("inc");

  if (profileWallet !== null) {
    const ctx = profileWallet.getContext("2d");

    // Chart configuration for income only
    const config = {
      type: "line",
      data: {
        labels: [],
        datasets: [
          {
            label: "Income",
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            data: [], // Only include income data
            fill: true,
            lineTension: 0.1,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [
            {
              gridLines: {
                display: false,
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
      },
    };

    const myLine = new Chart(ctx, config);

    // Fetch data from the server for income only
    function fetchTransactionData(timeframe) {
      console.log(`Fetching income data for: ${timeframe}`); // Debugging log
      fetch(`http://localhost:8080/transactionData?timeframe=${timeframe}`)
        .then((response) => {
          console.log("Server response:", response); // Debugging log
          if (!response.ok) throw new Error("Failed to fetch data");
          return response.json();
        })
        .then((data) => {
          console.log("Fetched data:", data); // Debugging log

          const labels = data.map((item) => item.date);
          const income = data.map((item) => item.income); // Only fetch income data

          // Update chart data
          config.data.labels = labels;
          config.data.datasets[0].data = income;

          // Update the chart
          myLine.update();
        })
        .catch((error) =>
          console.error("Error fetching transaction data:", error)
        );
    }

    // Add click event listeners to the area-chart-action spans
    const actions = document.querySelectorAll("#area-chart-action span");
    actions.forEach((action) => {
      action.addEventListener("click", function () {
        console.log(`Clicked: ${this.textContent.trim()}`);
        // Highlight the selected action
        actions.forEach((span) => span.classList.remove("active"));
        this.classList.add("active");

        // Fetch and update the chart data based on the clicked action
        const timeframe = this.textContent.trim().toLowerCase(); // day, week, month, year
        fetchTransactionData(timeframe);
      });
    });

    // Fetch initial data for "Day" by default
    fetchTransactionData("day");
  }
});
