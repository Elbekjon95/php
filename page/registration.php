
        <main class="main">
            <section class="head">
                <h2 class="head__title">Регистрация в системе</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>

            <form action="../include/user-registor.php" class="form"  enctype="multipart/form-data" method="post">
                <label class="form__label">
                   <!--  <span class="form__text">Логин</span> -->
                    <input type="text" class="form__input" name="login" autocomplete="off">
                </label>
                <label class="form__label">
                   <!--  <span class="form__text">Имя</span> -->
                    <input type="text" class="form__input" name="name" autocomplete="off">
                </label>
                <label class="form__label">
                  <!--   <span class="form__text">Пароль</span> -->
                    <input type="password" class="form__input" name="pass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <label class="form__label">
                  <!--   <span class="form__text">Повторите пароль</span> -->
                    <input type="password" class="form__input" name="confirmpass">
                    <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
                </label>
                <span class="form__error">* Пароли не совподают</span>
                
                <label class="form__label">
                      <input class="input-photo" type="file" name="photo" accept="image/png,image/jpeg,image/gif">
                </label>
                
                <button class="form__btn">Зарегистрироваться</button>
            </form>
        </main>