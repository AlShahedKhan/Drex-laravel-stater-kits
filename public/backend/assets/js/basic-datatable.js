"use strict";

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#table_show").on("change", function (e) {
    var select = $(this),
        form = select.closest("form");
    form.attr("action", "/dashboard?show=" + select.val());
    form.submit();
});

$("#designation").on("change", function (e) {
    var select = $(this),
        form = select.closest("form");

    form.attr("action", "/dashboard?designation=" + select.val());
    form.submit();
});

$("#table_search").on("keyup", function (e) {
    var select = $(this),
        form = select.closest("form");
    form.attr("action", "/dashboard?search=" + select.val());
    form.submit();
});

var select = $("#table_daterange");

function cb(start, end) {
    let from = start.format("YYYY-MM-DD");
    let to = end.format("YYYY-MM-DD");

    var form = select.closest("form");
    form.attr("action", `/dashboard?from=${from}&to=${to}`);
    form.submit();
}

select.daterangepicker(
    {
        showDropdowns: false,
        applyButtonClasses: "apply-btn",
        cancelButtonClasses: "cancel-btn",
        locale: {
            cancelLabel: "Cancel",
            applyLabel: "Apply",
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
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
            ],
        },
        showCustomRangeLabel: true,
        alwaysShowCalendars: true,
        startDate: moment(),
        endDate: moment().subtract(1, "month").endOf("month"),
        drops: "auto",
    },
    cb
);

$("#all_checked").on("click", function () {
    if ($(this).is(":checked")) {
        $(".column_checked").prop("checked", true);
    } else {
        $(".column_checked").prop("checked", false);
    }
    $(".count").text("(" + $(".column_checked:checked").length + ")");
});

function columnChecked(id) {
    if ($("#column_" + id).is(":checked")) {
        $(".count").text("(" + $(".column_checked:checked").length + ")");
    } else {
        $(".count").text("(" + $(".column_checked:checked").length + ")");
    }
}

function tableAction(value, url) {
    let ids = [];

    $(".column_checked:checked").each(function () {
        ids.push($(this).val());
    });

    let data = {
        url,
        ids,
        action: "",
        icon: "warning",
        method: "POST",
        type: "",
    };

    switch (value) {
        case "delete":
            data.action = "Delete";
            data.method = "DELETE";
            data.type = "delete";
            dataAction(data);
            break;

        case "active":
            data.action = "Active";
            data.type = "active";
            dataAction(data);
            break;

        case "inactive":
            data.action = "Inactive";
            data.type = "inactive";
            dataAction(data);
            break;

        default:
            break;
    }
}

// action delete
function dataAction(values) {
    if (values.ids.length > 0) {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to " + values.action + " this record?",
            icon: values.icon,
            showCancelButton: true,
            confirmButtonText: values.action,
        }).then((result) => {
            if (result.isConfirmed) {
                ajaxRequest(values);
            }
        });
    } else {
        Swal.fire({
            title: "Please select at least one row",
            icon: "warning",
            timer: 3000,
        });
    }
}

function ajaxRequest(options) {
    switch (options.method) {
        case "POST":
            $.ajax({
                url: options.url,
                type: "POST",
                data: {
                    type: options.type,
                    ids: options.ids,
                },
                dataType: "json",
                cache: false,
                success: function (response) {
                    // console.log(response);
                    $("#all_checked").prop("checked", false);
                    $(".count").text("(0)");
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                },
            });
            break;
        case "DELETE":
            $.ajax({
                url: options.url,
                type: "DELETE",
                data: {
                    type: "delete",
                    ids: options.ids,
                },
                success: function (response) {
                    $("#all_checked").prop("checked", false);
                    $(".count").text("(0)");
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                },
            });
            break;
        default:
            break;
    }
}
