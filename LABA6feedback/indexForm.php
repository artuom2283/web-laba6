<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document2</title>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="feedback.css">
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
        <h2 id="signUp">Форма зворотнього зв'язку</h2>
    </div>

    <div class="formSignUp__border">

        <form action="" method="POST">

            <fieldset class="formSignUp__area__left">

                <label class="newLine" for="name">Ім’я:</label>
                <input class="input__all" id="username" name="username" placeholder="Ім’я">
                <label class="newLine" for="lastname">Тема повідомлення:</label>
                <input class="input__all" id="usersurname" name="usersurname" placeholder="Тема">
                <label for="date_of_birth">Email:</label>
                <input class="input__all" id="emailuser" name="emailuser" type="email" placeholder="Ел. пошта"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <button class="button__1" type="reset">Відмінна</button>

            </fieldset>

            <fieldset class="formSignUp__area__right">

                <fieldset class="formFeedBack__area__right">
                    <textarea tabindex="4" class="form-textarea" id="age" name="age" cols="40" rows="10" placeholder="текст повідомлення..."></textarea>
                </fieldset>
                <label class="newLine">Куди відправляти данні?</label>
                <input type="radio" name="sentto" id="email" value="email" onclick="handleClick(this)">
                <label class="black" for="email">Email</label>
                <input type="radio" name="sentto" id="telegram" value="telegram" onclick="handleClick(this)">
                <label class="black" for="email">Telegram</label><br>
                <input type="radio" name="sentto" id="file" value="file" onclick="handleClick(this)">
                <label class="black" for="email">File</label><br>
                <button class="button__2" id="submit1" type="submit">Зареєструватися</button>


            </fieldset>

        </form>

    </div>

</div>

</section>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="postAJAX.js"></script>
    <script src="script.js"></script>
</body>
</html>