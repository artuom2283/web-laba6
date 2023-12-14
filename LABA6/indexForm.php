<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document2</title>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>LAB6</title>
    <script>

        
    </script>
</head>
<body class=" bg-dark text-light">
<header>
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border text-center">
                    <h1>ТР-23</h1>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border text-center">
                    <h1>Пузенко Артем</h1>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border text-center">
                    <h1>ЛАБ6</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- <form action="" method="post"> -->

<section class="formSignUp pt-5">

<div class="formSignUp__container">

    <div class="formSignUp__title">
        <h2 id="signUp">Форма реєстрації</h2>
    </div>

    <div class="formSignUp__border">

        <form action="" method="POST">

            <fieldset class="formSignUp__area__left">

                <img src="photo_login.jpg" alt="photo_login" class="photo_login">
                <label class="newLine" for="name">Ім’я:</label>
                <input class="input__all" id="username" name="username" placeholder="Ім’я">
                <label class="newLine" for="lastname">Прізвище:</label>
                <input class="input__all" id="usersurname" name="usersurname" placeholder="Прізвище">
                <label class="newLine" for="state">Стать:</label>
                <label for="pick1"><input type="radio" name="pick" id="pick1" value="Чоловіча"> Чоловіча </label>
                <label for="pick2"><input type="radio" name="pick" id="pick2" value="Жіноча"> Жіноча </label>
                <label class="newLine label_age" for="age">Вік:</label>
                <input class="input__age" id="age" name="age" value="18" max="100" min="1" step="1">
                <label for="date_of_birth">Дата народження:</label>
                <input class="input__date" id="DOB" name="DOB" type="date">
                <button class="button__1" type="reset">Відмінна</button>

            </fieldset>

            <fieldset class="formSignUp__area__right">

                <label class="newLine" for="countres">Країна проживання</label>
                <!-- <input class="input__all" id="country" list="countries" placeholder="Оберіть країну проживання"> 
                   <datalist id="countries" name="countries"> -->
                    <select name="countries" size="1">
                      <option value="Україна">Україна</option>
                      <option value="Польща">Польща</option>
                      <option value="Італія">Італія</option>
                      <option value="Швеція">Швеція</option>
                      <option value="Ірландія">Ірландія</option>
                      </select>
                  <!-- </datalist> -->
                <label class="newLine" for="phone_number">Номер телефону</label>
                <input class="input__all" id="phone" name="phone" type="tel" pattern="\+380\([0-9]{2}\)[0-9]{7}" placeholder="+380(XX)XXXXXXX">
                <label class="newLine" for="email">Електронна пошта</label>
                <input class="input__all" id="emailuser" name="emailuser" type="email" placeholder="Ел. пошта"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <label class="newLine" for="password">Пароль</label>
                <input class="input__all" id="userpassword" name="userpassword" type="password" size="20" placeholder="Пароль">
                <label class="newLine">Куди відправляти данні?</label>
                <input type="radio" name="sentto" id="email" value="email" onclick="handleClick(this)">
                <label for="email">Email</label>
                <input type="radio" name="sentto" id="telegram" value="telegram" onclick="handleClick(this)">
                <label for="email">Telegram</label><br>
                <input type="radio" name="sentto" id="file" value="file" onclick="handleClick(this)">
                <label for="email">File</label><br>
                <button class="button__2" id="submit1" type="submit">Зареєструватися</button>


            </fieldset>

        </form>

    </div>

</div>

</section>

</form>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="postAJAX.js"></script>
    <script src="script.js"></script>
</body>
</html>