"use strict";

$(document).ready(function () {
  // profile form expend
  $(document)
    .on("click", '.btn-edit[aria-expanded="false"]', function () {
      $(this).attr("aria-expanded", false);

      $(this).fadeOut(function () {
        $(this).text("Edit").fadeIn();
      });
    })
    .on("click", '.btn-edit[aria-expanded="true"]', function () {
      $(this).attr("aria-expanded", true);

      $(this).fadeOut(function () {
        $(this).text("Cancel").fadeIn();
      });
    });
  // end
});
