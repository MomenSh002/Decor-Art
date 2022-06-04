const form = document.querySelector('#formdetails');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const data = {
        email: form.email.value,
        name: form.name.value,
        mobile: form.mobile.value,
        msg: form.msg.value,
    }

    fetch('form.php', {
        method: 'POST', // or 'PUT'
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    }).then((data) => {
        form.email.value = '';
        form.mobile.value = '';
        form.name.value = '';
        form.msg.value = '';
    });

})