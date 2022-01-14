window.addEventListener('alert', event => {
    $('#'+event.detail.name).modal(event.detail.action);
})
