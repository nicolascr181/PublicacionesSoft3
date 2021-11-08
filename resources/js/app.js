require("./bootstrap");

const ClassicEditor = require("@ckeditor/ckeditor5-build-classic");

/** Recibe el nombre del campo del id del text area*/
ClassicEditor.create(document.querySelector("#content_publication"))
    .then((editor) => {
        console.log(editor);
    })
    .catch((error) => {
        console.error(error);
    });

/** Al cambiar el codigo ejecturar npm run dev */
