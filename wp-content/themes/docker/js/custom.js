jQuery( document ).ready(function() {
    console.log( "ready!" );
    $('#exampleModal').modal();
})


$(function(){
    $('#tt').validate({
        rules: {
            FirstName: {
                required: true,
                minlength: 2
            },
            LastName: {
                required: true,
                minlength: 2
            },
            Login : {
               required :true,
               minlength : 3
            },
            Password: {
                required: true,
                minlength: 6,
            },
            RePassword: {
                required : true,
                minlength: 6,
                equalTo: "#password",
            },
            Phone:{
                required :true,

            },
            EmailAdress:{
                required :true,
            }
        },

        messages: {
            FirstName: {
                required: "Поле 'Имя' обязательно к заполнению",
                minlength: "Введите не менее 2-х символов в поле 'Имя'"
            },
            LastName: {
                required: "Поле 'Имя' обязательно к заполнению",
                minlength: "Введите не менее 2-х символов в поле 'Фамилия'"
            },
            Login: {
                required : "Поле 'Логин' обязательно к заполнению",
                minlength: "Введите не менее 3-х символов в поле 'Логин'"
            },
            Password :{
                required: "Поле 'Пароль' обязательно к заполнению",
                minlength: "Введите не менее 6-ти символов в поле 'Пароль'"
            },
            RePassword :{
                required: "Введите пароль еще раз",
                equalTo: "Пароли должны совпадать!",
            },
            Phone :{
                required: "Поле 'Телефон' обязательно к заполнению",
            },
            EmailAdress :{
                required: "Поле 'Почта' обязательно к заполнению",

            }

        }
    });
});
