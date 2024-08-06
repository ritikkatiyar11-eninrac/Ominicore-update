jQuery(function (e) {
  'use strict';
  $(document).ready(function () {
    $('#editor').summernote({
      spellCheck: true,
      disableGrammar: false,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize', 'fontsizeunit']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['fullscreen', 'codeview', 'help', 'undo', 'redo']],
        ['mediaUpload', ['mediaUpload']],
      ],
      buttons: {
        mediaUpload: editorMediaUpload
      }
    });
    $('#editor').summernote('code', '');
  });
});


function summernoteImage(HTMLstring) {
  $('#editor').summernote('pasteHTML', HTMLstring);
}

var editorMediaUpload = function (context) {
  var ui = $.summernote.ui;
  // create button
  var button = ui.button({
    contents: '<i class="fa fa-picture-o"/>',
    tooltip: 'mediaUpload',
    click: function () {
      imgSelectionType = 'editorUpload';
      getAttachment(1);
      var myModal = new bootstrap.Modal(document.querySelector('.import-img-model'));
      myModal.show();
    }
  });

  return button.render();   // return button as jquery object
}



