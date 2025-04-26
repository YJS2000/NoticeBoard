window.onload = function() {
    ClassicEditor
        .create(document.querySelector('#editor'), {
            // 에디터 옵션 설정
        })
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error(error);
        });
};