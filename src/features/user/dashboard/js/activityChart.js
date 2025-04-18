$(function () {
    const ctx = document.getElementById("activityChart");
    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [
                {
                    label: "Recipe Views",
                    data: [65, 59, 80, 81, 56, 55],
                    borderColor: "#0d6efd",
                    tension: 0.4,
                    fill: false,
                },
                {
                    label: "Recipe Likes",
                    data: [28, 48, 40, 19, 86, 27],
                    borderColor: "#198754",
                    tension: 0.4,
                    fill: false,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    // position: 'top',
                    display: false,
                },
                title: {
                    display: false,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                    border: {
                        display: false,
                        dash: [5, 5],
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
        },
    });
});
