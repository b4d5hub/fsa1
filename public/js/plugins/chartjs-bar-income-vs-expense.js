fetch('http://localhost:8080/income-expense-data')
        .then(response => response.json())
        .then(data => {
            var ctx = document.getElementById("chartjsIncomeVsExpense").getContext("2d");

            // Create the chart with fetched data
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels, // Dynamically set labels (months)
                    datasets: [
                        {
                            label: 'Income',
                            data: data.incomeData, // Dynamically set income data
                            backgroundColor: 'rgba(47, 44, 216,1)', // Solid blue
                        },
                        {
                            label: 'Expense',
                            data: data.expenseData, // Dynamically set expense data
                            backgroundColor: 'rgba(47, 44, 216,0.2)', // Semi-transparent blue
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [{
                            gridLines: {
                                drawBorder: false,
                                display: false
                            },
                            ticks: {
                                display: true,
                                beginAtZero: true
                            },
                            barPercentage: 1,
                            categoryPercentage: 0.5
                        }],
                        yAxes: [{
                            gridLines: {
                                drawBorder: false,
                                display: false
                            },
                            ticks: {
                                display: true,
                                beginAtZero: true
                            },
                        }]
                    },
                    tooltips: {
                        enabled: true
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));