const selModel = document.querySelector('.rate-form__model'),
    models = {
        'Geely': ['Atlas Pro', 'Coolray', 'GS', 'Tugella'],
        'Haval': ['F7', 'F7X', 'Jolion'],
        'Chery': ['Tiggo 4', 'Tiggo 7 Pro', 'Tiggo 8', 'Tiggo 8 Pro'],
        'Exeed': ['Exeed TXL', 'Exeed FL'],
        'Changan': ['CS 35 Plus', 'CS 55', 'CS 75FL'],
        'Jac': ['Jac S3', 'Jac J3', 'Jac S7', 'Jac T6', 'Jac S5'],
        'GWM Pickup': ['Wingle 7']
    };
    console.log(selModel)


document.querySelector('.rate-form__mark select').addEventListener('change', function (e) {
    selModel.innerHTML = '<select name="model"><option value="">Выберите модель</option></select>';
    models[this.value].forEach(val => {
        selModel.querySelector('select').innerHTML += `<option value="${val}">${val}</option>`;
    });
});