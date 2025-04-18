$(function () {
    const ctxCategory = document.getElementById("categoryChart");
    new Chart(ctxCategory, {
        type: "doughnut",
        data: {
            labels: ["Main Dish", "Desserts", "Appetizers", "Beverages"],
            datasets: [
                {
                    data: [40, 25, 20, 15],
                    backgroundColor: [
                        "#0d6efd",
                        "#198754",
                        "#ffc107",
                        "#dc3545",
                    ],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                    // position: 'bottom',
                },
                title: {
                    display: false,
                },
            },
            // cutout: '70%'
        },
    });
});
