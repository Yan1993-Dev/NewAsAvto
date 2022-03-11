$('btn ').click(function(){
    var name = $('#drive__name').val()
    var phone = $('#drive__phone').val()

    var flag = 0

    if(phone == '') {
        flag = 1
    }
    if(flag == 0) {
        $.post('/send.php',{ NAME: name, PHONE: phone,}, function(data){
            if(data == 1) {
                alert('Ваша заявка успешно отправлена! Менеджер с вами скоро свяжется')
            } else {
                alert('Произошла ошибка')
            }
        })
    }
})