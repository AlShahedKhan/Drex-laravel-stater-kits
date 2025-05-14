"use strict";

$(document).ready(function () {
  // files browse
  $("#open-file-uploader").on("click", function (event) {
    event.preventDefault();
    $("#input-button").click();
  });

  $("#input-button").on("change", function () {
    showFile(this.files[0]);
    uploadFile(this.files[0]);
  });
  // show file
  function showFile(file) {
    const reader = new FileReader();

    reader.onload = (function (theFile) {
      return function (e) {
        const imageType = /image.*/;

        if (!theFile.type.match(imageType)) {
          return;
        }

        $("#id-profile-image").attr("src", e.target.result);
      };
    })(file);

    reader.readAsDataURL(file);
  }

  // upload files
  function uploadFile(file) {
    console.log(file);
  }
});
