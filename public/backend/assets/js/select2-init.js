"use strict";

// document ready
$(function () {
    function formatText(icon) {
        const isRTL = $(".rtl");

        return $(
            `<span class="flex align-items-center"><i class="${$(
                icon.element
            ).data("icon")}"></i><span class="${
                isRTL.length ? "mr-2" : "ml-2"
            }">${icon.text}</span></span>`
        );
    }

    // select2 input with icon
    $(".select2-input-image").select2({
        width: "100%",
        marginBottom: "10px",
        templateSelection: formatText,
        templateResult: formatText,
    });

    // Flag Icon list in lanuage Create, edit
    $(".flag_icon_list").select2({
        width: "100%",
        marginBottom: "10px",
        templateSelection: formatText,
        templateResult: formatText,
    });

    // select2 input without image
    $(".select2-input").select2({
        width: "100%",
        tags: true,
        allowClear: true,
    });

    // select2 style
    $(".select2.select2-container").css({
        "margin-bottom": "10px",
    });

    $(".select2-selection.select2-selection--single").addClass("ot-input");
    // remove default arrow and add custom arrow start

    $(".select2-selection.select2-selection--single").css({
        height: "auto",
    });
    $(".select2.select2-container.select2-container--default").css({
        "margin-bottom": "0px",
    });
    $(".select2-selection__rendered").css({
        "padding-top": "6px",
        "padding-bottom": "6px",
        "line-height": "initial",
        "font-size": "1rem",
        "font-weight": 400,
        "line-height": 1.5,
    });

    $('b[role="presentation"]').hide();
    $(".select2-selection__arrow").append('<i class="las la-angle-down"></i>');

    $(".select2-selection__arrow").css({
        display: "flex",
        "align-items": "center",
        "justify-content": "center",
        height: "100%",
    });

    // country and currency

    $("#language_with_flag").select2({
        width: "100%",
        marginBottom: "10px",
        templateSelection: formatText,
        templateResult: formatText,
    });

    $("#currencies").select2({
        width: "100%",
        marginBottom: "10px",
    });

    $(
        ".language-currency-dropdown .select2-selection.select2-selection--single"
    ).css({
        height: "48px",
        display: "flex",
        "align-items": "center",
    });

    $(".select2-selection.select2-selection--single").addClass("ot-input");
    // remove default arrow and add custom arrow start

    $('.language-currency-dropdown  b[role="presentation"]').hide();
    $(".language-currency-dropdown .select2-selection__arrow").append(
        '<i class="fa-solid fa-chevron-down"></i>'
    );

    $("#select2-language_with_flag-container").css({
        "margin-left": "15px",
        "padding-left": 0,
    });

    $(".select2-selection__arrow").css({
        display: "flex",
        "align-items": "center",
        "justify-content": "end",
        height: "100%",
        "margin-right": "15px",
    });

    $(".rtl .select2-selection__arrow").css({
        "margin-left": "15px",
    });

    // $(".rtl .select2-results .select2-results__option.select2-results__option--selectable span").css({

    // });
});
