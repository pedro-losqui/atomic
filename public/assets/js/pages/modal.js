window.addEventListener('modal', event => {
    $('#'+event.detail.name).modal(event.detail.action);
})
