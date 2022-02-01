window.addEventListener('alert', event => {
    var notyf = new Notyf({
        duration: 7000,
    });
    console.log(event.detail)
    notyf.success(event.detail.message);
})
