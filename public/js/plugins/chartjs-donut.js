// Fetch data from the API endpoint
fetch('http://localhost:8080/dataincome')
    .then(response => response.json())
    .then(data => {
        const ctx = document.getElementById("chartjsDonut").getContext("2d");

        // Create the doughnut chart
        new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: data.labels, // Dynamically set labels (categories)
                datasets: [{
                    data: data.data, // Dynamically set data (amounts)
                    backgroundColor: [
                        "rgba(22, 82, 240,1)",
                        "rgba(22, 82, 240,0.5)",
                        "rgba(22, 82, 240,0.15)",
                        "rgba(200, 82, 240,0.7)", // Additional colors
                        "rgba(100, 150, 240,0.7)"
                    ],
                }]
            },
            options: {
                responsive: true,
                cutoutPercentage: 80,
                maintainAspectRatio: false,
                animation: {
                    animateRotate: true,
                    animateScale: true,
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        usePointStyle: true,
                        fontSize: 12,
                        fontColor: "#464a53",
                        padding: 20,
                    },
                },
            },
        });

        // Populate the list below the chart
        const incomeList = document.getElementById("incomeList");
        const totalIncome = data.data.reduce((a, b) => a + b, 0);

        data.labels.forEach((label, index) => {
            const percentage = ((data.data[index] / totalIncome) * 100).toFixed(2);
            const listItem = `
                <li>
                    <p class="mb-0">${label}</p>
                    <h5 class="mb-0">
                        <span>$${data.data[index].toFixed(2)}</span> ${percentage}%
                    </h5>
                </li>
            `;
            incomeList.innerHTML += listItem;
        });
    })
    .catch(error => console.error('Error fetching data:', error));


    // ABOUT CATEGORy expenses
/*fetch('http://localhost:8080/dataexponses')
.then(response => response.json())
.then(data => {
    const ctx = document.getElementById("chartjsDonutexpenses").getContext("2d");

    // Create the doughnut chart
    new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: data.labels, // Dynamically set labels (categories)
            datasets: [{
                data: data.data, // Dynamically set data (amounts)
                backgroundColor: [
                    "rgba(22, 82, 240,1)",
                    "rgba(22, 82, 240,0.5)",
                    "rgba(22, 82, 240,0.15)",
                    "rgba(200, 82, 240,0.7)", // Additional colors
                    "rgba(100, 150, 240,0.7)"
                ],
            }]
        },
        options: {
            responsive: true,
            cutoutPercentage: 80,
            maintainAspectRatio: false,
            animation: {
                animateRotate: true,
                animateScale: true,
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    usePointStyle: true,
                    fontSize: 12,
                    fontColor: "#464a53",
                    padding: 20,
                },
            },
        },
    });

    // Populate the list below the chart
    const incomeList = document.getElementById("incomeList");
    const totalIncome = data.data.reduce((a, b) => a + b, 0);

    data.labels.forEach((label, index) => {
        const percentage = ((data.data[index] / totalIncome) * 100).toFixed(2);
        const listItem = `
            <li>
                <p class="mb-0">${label}</p>
                <h5 class="mb-0">
                    <span>$${data.data[index].toFixed(2)}</span> ${percentage}%
                </h5>
            </li>
        `;
        incomeList.innerHTML += listItem;
    });
})
.catch(error => console.error('Error fetching data:', error));*/