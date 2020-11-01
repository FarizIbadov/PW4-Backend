const form = document.getElementById('form');
const button = document.getElementById('button');

button.disabled = true;


if (form){
    const fields = form.querySelectorAll('input');
    fields.forEach(field => {
        field.addEventListener('keydown',() => {
            button.disabled = !form.checkValidity();
        })
    })
}