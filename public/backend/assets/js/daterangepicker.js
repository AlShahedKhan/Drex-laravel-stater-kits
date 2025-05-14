"use strict";

$(function () {
    const start = moment().subtract(29, "days");
    const end = moment();

    function cb(start, end) {
        console.log(
            "A new date selection was made: " +
                start.format("YYYY-MM-DD") +
                " to " +
                end.format("YYYY-MM-DD")
        );
    }

    $("#daterange").daterangepicker(
        {
            showDropdowns: false,
            applyButtonClasses: "apply-btn",
            cancelButtonClasses: "cancel-btn",
            locale: {
                cancelLabel: "Cancel",
                applyLabel: "Set Data",
                format: "YYYY-MM-DD",
            },

            ranges: {
                Today: [moment(), moment()],
                Yesterday: [
                    moment().subtract(1, "days"),
                    moment().subtract(1, "days"),
                ],
                "Last 7 Days": [moment().subtract(6, "days"), moment()],
                "Last 30 Days": [moment().subtract(29, "days"), moment()],
                "This Month": [
                    moment().startOf("month"),
                    moment().endOf("month"),
                ],
                "Last Month": [
                    moment().subtract(1, "month").startOf("month"),
                    moment().subtract(1, "month").endOf("month"),
                ],
            },
            showCustomRangeLabel: true,
            alwaysShowCalendars: true,
            startDate: moment(),
            endDate: moment(),
            drops: "auto",
        },
        cb
    );

    cb(start, end);
});
