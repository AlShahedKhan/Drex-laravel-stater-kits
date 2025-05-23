window.addEventListener("DOMContentLoaded", function () {
  const fileBox = document.getElementById("id-file-box");
  fileBox.addEventListener("dragover", dragOverHandler);
  fileBox.addEventListener("drop", dropHandler);
  
  // file upload
  function dragOverHandler(event) {
    event.preventDefault();
  }

  function dropHandler(event) {
    event.preventDefault();

    const files = event.dataTransfer.files;
    showFiles(files);
    uploadFiles(files);
  }

  // show file
  function showFiles(files) {
    [].forEach.call(files, function (file, index) {
      const reader = new FileReader();

      reader.onload = (function (theFile) {
        return function (e) {
          const imageType = /image.*/;
          let imageResult = "./assets/images/profile/file.jpg";

          if (theFile.type.match(imageType)) {
            imageResult = e.target.result;
          }
          // Render the image.
          const div = document.createElement("div");
          div.className = "img-box";
          div.innerHTML = '<img class="rounded" src="' + imageResult + '" />';
          $(".file-show-box").append(div);
        };
      })(file);

      reader.readAsDataURL(file);
    });
  }
  // loder showing
  function showLoder() {
    const div = document.createElement("div");
    div.className = "spinner-border text-info";
    div.innerHTML = '<span class="visually-hidden">Loading...</span>';
    $(".file-show-box").append(div);
  }

  // loder remove
  function removeLoder() {
    $(".file-show-box >").remove(".spinner-border");
  }

  // upload files
  function uploadFiles(files) {
    console.log(files);
    setTimeout(() => {
      showLoder();
    }, 500);

    setTimeout(() => {
      removeLoder();
    }, 3000);
  }
  //   end
});
