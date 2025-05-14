
(function ($) {

    "use strict";
/* Apex Chart initial Setting start */

window.Apex = {
    chart: {
        foreColor: "#6f767e",
        toolbar: {
            show: false,
        },
    },
    stroke: {
        width: 3,
    },
    dataLabels: {
        enabled: false,
    },
    tooltip: {
        theme: "dark",
    },
    grid: {
        borderColor: "#535A6C",
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
};

/* Apex Chart initial Setting start */

/* Initialization */

/* Spark1 start */

const spark1 = {
    chart: {
        id: "spark1",
        group: "sparks",
        type: "line",
        height: 80,
        sparkline: {
            enabled: true,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 2,
            opacity: 0.2,
        },
    },
    series: [
        {
            data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21],
        },
    ],
    stroke: {
        curve: "smooth",
    },
    markers: {
        size: 0,
    },
    grid: {
        padding: {
            top: 20,
            bottom: 10,
            left: 110,
        },
    },
    colors: ["#fff"],
    tooltip: {
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function formatter(val) {
                    return "";
                },
            },
        },
    },
};

/* Spark1 end */

/* Spark2 start */

const spark2 = {
    chart: {
        id: "spark2",
        group: "sparks",
        type: "line",
        height: 80,
        sparkline: {
            enabled: true,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 2,
            opacity: 0.2,
        },
    },
    series: [
        {
            data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69],
        },
    ],
    stroke: {
        curve: "smooth",
    },
    grid: {
        padding: {
            top: 20,
            bottom: 10,
            left: 110,
        },
    },
    markers: {
        size: 0,
    },
    colors: ["#fff"],
    tooltip: {
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function formatter(val) {
                    return "";
                },
            },
        },
    },
};

/* Spark2 end */

/* Spark3 start */

const spark3 = {
    chart: {
        id: "spark3",
        group: "sparks",
        type: "line",
        height: 80,
        sparkline: {
            enabled: true,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 2,
            opacity: 0.2,
        },
    },
    series: [
        {
            data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19],
        },
    ],
    stroke: {
        curve: "smooth",
    },
    markers: {
        size: 0,
    },
    grid: {
        padding: {
            top: 20,
            bottom: 10,
            left: 110,
        },
    },
    colors: ["#fff"],
    xaxis: {
        crosshairs: {
            width: 1,
        },
    },
    tooltip: {
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function formatter(val) {
                    return "";
                },
            },
        },
    },
};

/* Spark3 end */

/* Spark4 start */

const spark4 = {
    chart: {
        id: "spark4",
        group: "sparks",
        type: "line",
        height: 80,
        sparkline: {
            enabled: true,
        },
        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 2,
            opacity: 0.2,
        },
    },
    series: [
        {
            data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61],
        },
    ],
    stroke: {
        curve: "smooth",
    },
    markers: {
        size: 0,
    },
    grid: {
        padding: {
            top: 20,
            bottom: 10,
            left: 110,
        },
    },
    colors: ["#fff"],
    xaxis: {
        crosshairs: {
            width: 1,
        },
    },
    tooltip: {
        x: {
            show: false,
        },
        y: {
            title: {
                formatter: function formatter(val) {
                    return "";
                },
            },
        },
    },
};

/* Spark4 end */

/* Render */
if($("#spark1").length){
    new ApexCharts(document.querySelector("#spark1"), spark1).render();
}
if($("#spark2").length){
    new ApexCharts(document.querySelector("#spark2"), spark2).render();
}
if($("#spark3").length){
    new ApexCharts(document.querySelector("#spark3"), spark3).render();
}
if($("#spark4").length){
    new ApexCharts(document.querySelector("#spark4"), spark4).render();
}





/* Line chart -> Media start */

var optionsLine = {
    chart: {
        height: 380,
        width: "100%",
        type: "line",
        zoom: {
            enabled: false,
        },
        dropShadow: {
            enabled: true,
            top: 3,
            left: 2,
            blur: 6,
            opacity: .3,
        },
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    series: [
        {
            name: "learner insight",
            data: [30, 15, 30, 40, 20, 27],
        },
        {
            name: "course inrole",
            data: [0, 39, 52, 11, 29, 43],
        },
    ],
    // title: {
    //     text: "learner insight",
    //     align: "left",
    //     offsetY: 25,
    //     offsetX: 0,
    // },
    // subtitle: {
    //     text: "Statistics",
    //     offsetY: 55,
    //     offsetX: 0,
    // },
    markers: {
        size: 6,
        strokeWidth: 0,
        hover: {
            size: 9,
        },
    },
    grid: {
        show: true,
        borderColor: "#e2e3e3",
        padding: {
            bottom: 0,
        },
    },

    labels: [
        "week-1",
        "week-2",
        "week-3",
        "week-4",
        "week-5",
        "week-6",
    ],
    xaxis: {
        tooltip: {
            enabled: false,
        },
    },
    legend: {
        position: "bottom",
        horizontalAlign: "center",
        offsetY: 6,
    },
};

if($("#line-adwords").length){
    var chartLine = new ApexCharts(
        document.querySelector("#line-adwords"),
        optionsLine
    );
    chartLine.render();
}


/* Line chart -> Media end */


// Area Charts- Spline (saiful)
var lineSpline ={
    series: [{
        name: 'series1',
        data: [40, 25, 80, 51, 90, 80, 30],
    }, {
        name: 'series2',
        data: [0, 60, 30, 70, 40, 120, 70]
    }],
    fill: {
        type: "gradient",
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.3,
          opacityTo: 0.6,
          stops: [0, 90, 100]
        }
      },
    chart: {
        height: 350,
        type: 'area',
        width: "100%",

    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    grid: {
        show: true,
        borderColor: "#e2e3e3",
        padding: {
            bottom: 0,
        },
    },
    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
        x: {
        format: 'dd/MM/yy HH:mm'
        },
    },
};

if($("#lineChartTwo").length){
    var chartNewLine = new ApexCharts(
    document.querySelector("#lineChartTwo"),lineSpline
)
chartNewLine.render();
}




/* RadialBar Start */

    var optionsCircle4 = {
        chart: {
            type: "radialBar",
            height:350,
            width: "100%",
        },
        plotOptions: {
            radialBar: {
            offsetY: 0,
            startAngle: 0,
            endAngle: 270,
            hollow: {
                margin: 5,
                size: '30%',
                background: 'transparent',
                image: undefined,
            },
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    show: false,
                }
            }
            }
        },

        stroke: {
            lineCap: "round",
        },
        colors: ['#0084ff99', '#00E396', '#0084ff99', '#00E396'],
        labels: ["Total Sutdent", "New Amission", "Absent" ,"Sutdent"],
        series: [90, 85, 77, 55],
        legend: {
            show: true,
            floating: true,
            fontSize: '14px',
            position: 'left',
            offsetX: -28,
            offsetY: 0,
            labels: {
            useSeriesColors: true,
            },
            markers: {
                size: 0
            },
            formatter: function(seriesName, opts) {
                return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
            },
            itemMargin: {
                vertical: 3
            }
        },
    };
    if($("#radialBarBottom").length){
        var chartCircle4 = new ApexCharts(
            document.querySelector("#radialBarBottom"),
            optionsCircle4
        );
        chartCircle4.render();
    }


/* RadialBar end */



/* Chart Bar start */

var optionsBar = {
    chart: {
        height: 380,
        width: "100%",
        type: "bar",
        stacked: true,
    },
    plotOptions: {
        bar: {
            columnWidth: "30%",
            horizontal: false,
        },
    },
    series: [
        {
            name: "PRODUCT A",
            data: [14, 25, 21, 17, 12, 13, 11, 19],
        },
        {
            name: "PRODUCT B",
            data: [13, 23, 20, 8, 13, 27, 33, 12],
        },
        {
            name: "PRODUCT C",
            data: [11, 17, 15, 15, 21, 14, 15, 13],
        },
    ],
    xaxis: {
        categories: [
            "2011 Q1",
            "2011 Q2",
            "2011 Q3",
            "2011 Q4",
            "2012 Q1",
            "2012 Q2",
            "2012 Q3",
            "2012 Q4",
        ],
    },
    fill: {
        opacity: 1,
    },
};
if($("#barchart").length){
    var chartBar = new ApexCharts(document.querySelector("#barchart"), optionsBar);
chartBar.render();
}



/* Chart Bar end */
var optionsArea = {
    chart: {
        height: 380,
        width: "100%",
        type: "area",
        stacked: false,
    },
    stroke: {
        curve: "straight",
    },
    series: [
        {
            name: "Music",
            data: [11, 15, 26, 20, 33, 27],
        },
        {
            name: "Photos",
            data: [32, 33, 21, 42, 19, 32],
        },
        {
            name: "Files",
            data: [20, 39, 52, 11, 29, 43],
        },
    ],
    xaxis: {
        categories: [
            "2011 Q1",
            "2011 Q2",
            "2011 Q3",
            "2011 Q4",
            "2012 Q1",
            "2012 Q2",
        ],
    },
    tooltip: {
        followCursor: true,
    },
    fill: {
        opacity: 1,
    },
};
if($("#areachart").length){
    var chartArea = new ApexCharts(
        document.querySelector("#areachart"),
        optionsArea
    );

    chartArea.render();
}


/* Chart area end */




// Mordern Chart

var colorPalette = ["#00D8B6", "#008FFB", "#FEB019", "#FF4560", "#775DD0"];
var optionsArea = {
    chart: {
        height: 380,
        width: "100%",
        type: "area",
        zoom: {
            enabled: false,
        },
    },
    stroke: {
        curve: "straight",
    },
    colors: colorPalette,
    series: [
        {
            name: "Blog",
            data: [
                {
                    x: 0,
                    y: 0,
                },
                {
                    x: 4,
                    y: 5,
                },
                {
                    x: 5,
                    y: 3,
                },
                {
                    x: 9,
                    y: 8,
                },
                {
                    x: 14,
                    y: 4,
                },
                {
                    x: 18,
                    y: 5,
                },
                {
                    x: 25,
                    y: 0,
                },
            ],
        },
        {
            name: "Social Media",
            data: [
                {
                    x: 0,
                    y: 0,
                },
                {
                    x: 4,
                    y: 6,
                },
                {
                    x: 5,
                    y: 4,
                },
                {
                    x: 14,
                    y: 8,
                },
                {
                    x: 18,
                    y: 5.5,
                },
                {
                    x: 21,
                    y: 6,
                },
                {
                    x: 25,
                    y: 0,
                },
            ],
        },
        {
            name: "External",
            data: [
                {
                    x: 0,
                    y: 0,
                },
                {
                    x: 2,
                    y: 5,
                },
                {
                    x: 5,
                    y: 4,
                },
                {
                    x: 10,
                    y: 11,
                },
                {
                    x: 14,
                    y: 4,
                },
                {
                    x: 18,
                    y: 8,
                },
                {
                    x: 25,
                    y: 0,
                },
            ],
        },
    ],
    fill: {
        opacity: 1,
    },
    title: {
        text: "Daily Visits Insights",
        align: "left",
        style: {
            fontSize: "18px",
        },
    },
    markers: {
        size: 0,
        style: "hollow",
        hover: {
            opacity: 5,
        },
    },
    tooltip: {
        intersect: true,
        shared: false,
    },
    xaxis: {
        tooltip: {
            enabled: false,
        },
        labels: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        tickAmount: 4,
        max: 12,
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        labels: {
            style: {
                colors: "#78909c",
            },
        },
    },
    legend: {
        show: false,
    },
};

if($("#area").length){
    var chartArea = new ApexCharts(document.querySelector("#area"), optionsArea);
    chartArea.render();
}

var optionsBar = {
    chart: {
        type: "bar",
        height: 380,
        width: "100%",
        stacked: true,
    },
    plotOptions: {
        bar: {
            columnWidth: "45%",
        },
    },
    colors: colorPalette,
    series: [
        {
            name: "Clothing",
            data: [42, 52, 16, 55, 59, 51, 45, 32, 26, 33, 44, 51, 42, 56],
        },
        {
            name: "Food Products",
            data: [6, 12, 4, 7, 5, 3, 6, 4, 3, 3, 5, 6, 7, 4],
        },
    ],
    labels: [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23],
    xaxis: {
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        labels: {
            style: {
                colors: "#6f767e",
            },
        },
    },
    title: {
        text: "Monthly Sales",
        align: "left",
        style: {
            fontSize: "18px",
        },
    },
};

if($("#bar").length){
    var chartBar = new ApexCharts(document.querySelector("#bar"), optionsBar);
chartBar.render();
}



// one dount
var optionDonut = {
    chart: {
        type: "donut",
        width: "100%",
        height: 380,
    },
    dataLabels: {
        enabled: false,
    },
    plotOptions: {
        pie: {
            customScale: 0.8,
            donut: {
                size: "75%",
            },
            offsetY: 20,
        },
        stroke: {
            colors: undefined,
        },
    },
    colors: colorPalette,
    title: {
        text: "Department Sales",
        style: {
            fontSize: "18px",
        },
    },
    series: [21, 23, 19, 14, 6],
    labels: [
        "Clothing",
        "Food Products",
        "Electronics",
        "Kitchen Utility",
        "Gardening",
    ],
    legend: {
        position: "left",
        offsetY: 80,
    },
};
if($("#donut").length){
    var donut = new ApexCharts(document.querySelector("#donut"), optionDonut);
    donut.render();
}



// Two dount
var optionDonut2 = {
    chart: {
        type: "donut",
        width: "100%",
        height: 380,
    },
    dataLabels: {
        enabled:false,
        fontSize:'20px'
    },
    plotOptions: {
        pie: {
            customScale: 0.8,
            size: 20,
            offsetY: 20,
            fontSize:'50px',
            donut: {
                size: "93%", //Border weight


                labels: {
                    show: true,
                    value: {
                        show: true,
                        fontSize: '40px',
                        color:'#3b3b3b',
                        offsetY: 25,
                    },
                    name: {
                        show: true,
                    },

                    total: {
                        show: true,
                        label: 'Total',
                        fontSize: "20px",
                        color:'#6f767e',

                        formatter: function (w) {
                            return w.globals.seriesTotals.reduce((a, b) => {
                                return a+b
                            }, 0)

                        }
                    }
                  }
            },
        },
        stroke: {
            colors: undefined,
        },
    },
    colors: colorPalette,

    // title: {
    //     text: "Department Sales",
    //     style: {
    //         fontSize: "18px",
    //     },
    // },

    series: [21, 23, 19],
    colors: ['#0084ff99', '#00E396', '#EAFFF8'],
    labels: [
        "Marketing ",
        "Online",
        "Offline",
    ],
    legend: {
        position: "bottom",
        offsetY: 0,
        offsetX: 0,
    },
};
if($("#admission").length){
    var donut = new ApexCharts(document.querySelector("#admission"), optionDonut2);
    donut.render();
}






// Three dount
var optionDonut3 = {
    chart: {
        type: "donut",
        width: "100%",
        height: 240,
    },
    dataLabels: {
        enabled:false,
        fontSize:'20px'
    },

    plotOptions: {
        pie: {
            customScale: 0.9,
            size: 20,
            offsetY: -10,
            offsetX: -30,
            fontSize:'20px',
            donut: {
                size: "75%", //Border weight
                background:'#F5F5F5',
                labels: {
                    show: true,
                    value: {
                        show: true,
                        fontSize: '30px',
                        color:'#505050',
                        offsetY: 15,
                    },
                    name: {
                        show: false,
                    },

                    total: {
                        show: true,
                        label: 'Total',
                        fontSize: "20px",
                        color:'#505050',

                        formatter: function (w) {
                            return w.globals.seriesTotals.reduce((a, b) => {
                                return a+b
                            }, 0)

                        }
                    }
                }
            },
        },
        stroke: {
            colors: undefined,
        },
    },
    colors: colorPalette,

    // title: {
    //     text: "Department Sales",
    //     style: {
    //         fontSize: "18px",
    //     },
    // },

    series: [23, 19],
    colors: ['#468dff', '#F0F0F0'],
    labels: [
        "Completed ",
        "Incomplete",
    ],
    // legend: {
    //     position: "right",
    //     offsetY: 50,
    //     offsetX: 0,
    //     // fontSize:'14px',
    // },

    legend: {
        itemMargin: {
            horizontal: 0,
            vertical: 5,
        },
        offsetY: 30,
        horizontalAlign: "center",
        verticalAlign: "center",
        position: "right",
        fontFamily: "Lexend",
        fontSize: "15px",
        fontWight: "500",
        lineHeight:1,

        // Shape
        markers: {
            radius: 3,
            height: 14,
            width: 16,
            top: '5px',
            offsetY: 2,
            offsetX: -2,

        },
    },

    responsive: [
        {
            breakpoint: 325,
            options: {
                legend: {
                    itemMargin: {
                        horizontal: 4,
                        vertical: 0,
                        fontSize: "14px",
                    },
                    horizontalAlign: "bottom",
                    position: "bottom",
                    fontSize: "14px",
                },
            },
        },
    ],

};
if($("#donut2").length){
    var donut1 = new ApexCharts(document.querySelector("#donut2"), optionDonut3);
    donut1.render();
}
if($("#donut3").length){
    var donut4 = new ApexCharts(document.querySelector("#donut3"), optionDonut3);
    donut4.render();
}
if($("#donut4").length){
    var donut2 = new ApexCharts(document.querySelector("#donut4"), optionDonut3);
    donut2.render();
}
if($("#donut5").length){
    var donut3 = new ApexCharts(document.querySelector("#donut5"), optionDonut3);
    donut3.render();
}










function trigoSeries(cnt, strength) {
    var data = [];
    for (var i = 0; i < cnt; i++) {
        data.push(
            (Math.sin(i / strength) * (i / strength) + i / strength + 1) *
                (strength * 2)
        );
    }

    return data;
}

var optionsLine = {
    chart: {
        height: 380,
        width: "100%",
        type: "line",
        zoom: {
            enabled: false,
        },
    },
    plotOptions: {
        stroke: {
            width: 4,
            curve: "smooth",
        },
    },
    colors: colorPalette,
    series: [
        {
            name: "Day Time",
            data: trigoSeries(52, 20),
        },
        {
            name: "Night Time",
            data: trigoSeries(52, 27),
        },
    ],
    title: {
        floating: false,
        text: "Customers",
        align: "left",
        style: {
            fontSize: "18px",
        },
    },
    subtitle: {
        text: "168,215",
        align: "center",
        margin: 30,
        offsetY: 40,
        style: {
            color: "#6f767e",
            fontSize: "24px",
        },
    },
    markers: {
        size: 0,
    },

    grid: {},
    xaxis: {
        labels: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        tooltip: {
            enabled: false,
        },
    },
    yaxis: {
        tickAmount: 2,
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        min: 0,
    },
    legend: {
        position: "top",
        horizontalAlign: "left",
        offsetY: -20,
        offsetX: -30,
    },
};
if($("#line").length){
    var chartLine = new ApexCharts(document.querySelector("#line"), optionsLine);
}


// a small hack to extend height in website sample dashboard
if($("#wrapper").length){
    chartLine.render().then(function () {
    var ifr = document.querySelector("#wrapper");
    if (ifr.contentDocument) {
        ifr.style.height = ifr.contentDocument.body.scrollHeight + 20 + "px";
    }
});
}





// new crm chart here
if($("#crm_chart").length){
    var options10 = {
        chart: {
            height: 400,
            type: 'bar',
            toolbar: {
                show: false
            },
        },
        series: [{
            name: 'Sales',
            data: [44, 55, 57, 56, 61, 58]
        }, {
            name: 'Projects',
            data: [76, 85, 101, 98, 87, 105]
        }],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: ['30%'],
                endingShape: 'rounded'
            },
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        },
        colors: ["#0061FF", "#7F58FE"],
        markers: {
            size: 6,
            colors: ['#fff'],
            strokeColor: "#0061FF",
            strokeWidth: 3,
        },
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        states: {
            normal: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: false,
                filter: {
                    type: 'none',
                    value: 0
                }
            }
        },
        grid: {
            borderColor: "#FFCCD2",
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: true
                }
            }
        }
    }
    var chart11 = new ApexCharts(document.querySelector("#crm_chart"), options10);
    chart11.render();
}


// on smaller screen, change the legends position for donut
var mobileDonut = function () {
    if ($(window).width() < 768) {
        donut.updateOptions(
            {
                plotOptions: {
                    pie: {
                        offsetY: -15,
                    },
                },
                legend: {
                    position: "bottom",
                },
            },
            false,
            false
        );
    } else {
        donut.updateOptions(
            {
                plotOptions: {
                    pie: {
                        offsetY: 20,
                    },
                },
                legend: {
                    position: "left",
                },
            },
            false,
            false
        );
    }
};

$(window).resize(function () {
    mobileDonut();
});
})(jQuery);