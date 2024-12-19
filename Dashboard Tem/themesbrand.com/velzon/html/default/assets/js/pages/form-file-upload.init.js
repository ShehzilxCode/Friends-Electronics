var previewTemplate,
    dropzone,
    dropzonePreviewNode = document.querySelector("#dropzone-preview-list"),
    inputMultipleElements = document.querySelectorAll("input.filepond-input-multiple");

if (dropzonePreviewNode) {
    previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
    dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
    
    dropzone = new Dropzone(".dropzone", {
        url: "https://httpbin.org/post",  // Ensure this is the correct route
        method: "post",
        previewTemplate: previewTemplate,
        previewsContainer: "#dropzone-preview",
        autoProcessQueue: false,  // Don't automatically upload files
        init: function () {
            var myDropzone = this;

            // Listen to the submit button click to manually submit the form
            document.querySelector("#addproductbtn").addEventListener("click", function () {
                myDropzone.processQueue(); // Manually upload the files
            });
        },
    });
}

// Set up FilePond
FilePond.registerPlugin(
    FilePondPluginFileEncode,
    FilePondPluginFileValidateSize,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview
);

if (inputMultipleElements) {
    inputMultipleElements.forEach(function (e) {
        FilePond.create(e);
    });
}

FilePond.create(document.querySelector(".filepond-input-circle"), {
    labelIdle:
        'Drag & Drop your picture or <span class="filepond--label-action">Browse</span>',
    imagePreviewHeight: 170,
    imageCropAspectRatio: "1:1",
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: "compact circle",
    styleLoadIndicatorPosition: "center bottom",
    styleProgressIndicatorPosition: "right bottom",
    styleButtonRemoveItemPosition: "left bottom",
    styleButtonProcessItemPosition: "right bottom",
});
