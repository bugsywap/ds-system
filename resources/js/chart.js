import ApexCharts from "apexcharts";
document.addEventListener("DOMContentLoaded", function () {
    const getChartOptions = () => {
        return {
            series: [52.8, 26.8, 20.4],
            colors: ["#1a9edd", "#1eab7c", "#0c6498"],
            chart: {
                height: 420,
                width: "100%",
                type: "pie",
            },
            responsive: [
                {
                    breakpoint: 1920,
                    options: {
                        legend: {
                            position: "right",
                        },
                    },
                },
                {
                    breakpoint: 1023,
                    options: {
                        legend: {
                            position: "bottom",
                        },
                    },
                },
            ],
            stroke: {
                colors: ["white"],
                lineCap: "",
            },
            plotOptions: {
                pie: {
                    labels: {
                        show: true,
                    },
                    size: "100%",
                    dataLabels: {
                        offset: -25,
                    },
                },
            },
            labels: [
                "Bunot ng Gilagid",
                "Root canal rekta ilong",
                "Sundot ngalangala",
            ],
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Poppins",
                },
            },
            legend: {
                position: "bottom",
                fontFamily: "Poppins",
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value + "%";
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function (value) {
                        return value + "%";
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        };
    };

    if (
        document.getElementById("pie-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("pie-chart"),
            getChartOptions()
        );
        chart.render();
    }
});
