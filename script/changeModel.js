const selModel = document.querySelector('.rate-form__model'),
    models = {
        'Geely': ['Atlas Pro', 'Coolray', 'GS', 'Tugella'],
        'Haval': ['F7', 'F7X', 'Jolion'],
        'Chery': ['Tiggo 4', 'Tiggo 7 Pro', 'Tiggo 8', 'Tiggo 8 Pro'],
        'Exeed': ['Exeed VX', 'Exeed FL'],
        'Changan': ['CS 35 Plus', 'CS 55', 'CS 75FL'],
        'Faw': ['X40','X80','T77'],
        'Jac': ['Jac S3', 'Jac J3', 'Jac S7', 'Jac T6', 'Jac S5'],
        'GWMPickup': ['Wingle 7']
    };
    console.log(selModel)


    document.querySelector('.rate-form__mark select').addEventListener('change', function (e) {

        selModel.innerHTML = '<label for="input_traid" class="label__traid-in">Выберите модель</label> <select name="model" class="input__traid-in"><option value="" class="input__traid-in">Выберите модель</option></select>';
        models[this.value].forEach(val => {
            selModel.querySelector('select').innerHTML += `<option value="${val}">${val}</option>`;
        });
    
    });