
var canvaEl = document.getElementById("incomeChart");
var config = {
    type: "bar",
    data: {labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{lable: "Income and Expenses", 
    data: [5, 15, 11, 23, 30, 15, 15, 7, 21, 9, 10, 25],
            },
        ],
    },
};


var incomeChart = new Chart(canvaEl, config)

