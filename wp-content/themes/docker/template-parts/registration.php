<div class="tarif">
    <div class="block_reg">
        <form action="<?php echo get_template_directory_uri()?>/registr.php" method="post" id="tt">
        <div class="reg__title">
            Введите данные
        </div>
        <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="FirstName" class="fname">Имя</label><br>
                <input type="text" name="FirstName" id="first_name" >
            </div>
        </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="LastName" class="lname">Фамилия</label><br>
                    <input type="text" name="LastName" id="last_name">
                </div>
            </div>
    </div>

        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="Login" class="login_reg"> Логин</label><br>
                    <input type="text" name="Login" id="login">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="Password" class="pass__reg"">Пароль</label><br>
                    <p class="info__reg">Вы будете использовать его для доступа к своей учетной записи</p>
                    <input type="password" name="Password" id="password">
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="RePassword" class="repass__reg"">Введите пароль еще раз</label><br>
                        <p class="info__reg">Убедитесь в правильности вводимого пароля</p>
                        <input type="password" name="RePassword" id="repassword">
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="Phone" class="phone__reg">Номер телефона</label><br>
                    <p class="info__reg">Мы не будем надоедать вам звонками и смс, если вы не хотите этого,
                        но ваш номер нужен нам для уточнения и согласования удобства получения заказа</p>
                    <input type="tel" name="Phone" id="phone">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="EmailAdress" class="email__reg">Email</label><br>
                    <p class="info__reg">Мы будем отправлять вам информацию о ваших заказах и бронированиях, а также рассказывать о вине,
                        наших новинках, специальных предложениях, если вы захотите этого</p>
                    <input type="email" name="EmailAdress" id="email">
                </div>
            </div>
        </div>

<!--        <div class="row">-->
<!--            <div class="col-md-10">-->
<!--                <div class="form-group">-->
<!--                    <label for=Pasport class="pasport__reg">Фото паспорта</label><br>-->
<!--                    <p class="info__reg">Это нужно нам для того, чтобы убедиться, что вы достигли совершеннолетнего возраста-->
<!--                        и мы не нарушаем закон</p>-->
<!--                    <input type="file" id="pasport" accept="image/*">-->
<!--                    <label for="pasport" class="passp">-->
<!--                        <i>-->
<!--                            <img src="https://img.icons8.com/cotton/40/000000/image-file-checked.png">-->
<!--                        </i>-->
<!--                        Выберите фотографию</label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
            <div class="row">
                <button type="submit" class="button_reg">Отправить</button>
            </div>
        </form>
</div>
</div>






















