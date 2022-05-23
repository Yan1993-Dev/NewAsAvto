const selModel = document.querySelector('.rate-form__model'),
    models = {
        'Geely': ['Atlas Pro', 'Coolray', 'Tugella'],
        'Haval': ['F7', 'F7X', 'Jolion'],
        'Chery': ['Tiggo 4', 'Tiggo 7 Pro', 'Tiggo 8', 'Tiggo 8 Pro', 'Tiggo 8 Pro Max'],
        'Exeed': ['Exeed VX', 'Exeed TXL', 'Exeed FL'],
        'Changan': ['CS 35 Plus', 'CS 55', 'CS 75FL'],
        'Faw': ['X40','T77'],
        'GWMPickup': ['Wingle 7']
    };
    console.log(selModel)


    document.querySelector('.rate-form__mark select').addEventListener('change', function (e) {

        selModel.innerHTML = '<label for="input_traid" class="label__traid-in">Выберите модель</label> <select name="choose_test" class="input__traid-in"><option value="" class="input__traid-in">Выберите модель</option></select>';
        models[this.value].forEach(val => {
            selModel.querySelector('select').innerHTML += `<option value="${val}">${val}</option>`;
        });
    
    });