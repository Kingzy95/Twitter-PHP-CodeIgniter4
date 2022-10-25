<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to CodeIgniter 4!</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <link rel="stylesheet" href="<?php echo base_url('/css/style.css'); ?> "/>

    </head>
    <body>
        <main>
            <aside class="left-banner">
                <img src="<?php echo base_url('/images/img_login.png'); ?>" class="back-img"/>
                <img src="<?php echo base_url('/images/logo.png'); ?>" class="top-img"/>
            </aside>
            <aside class="right-banner">
                <div class="top">
                    <img src="<?php echo base_url('/images/logo.png'); ?>" />
                </div>
                <h1>Ça se passe <br> maintenant</h1>
                <h2>Rejoignez Twitter dès aujourd'hui.</h2>
                <div class="btn-connect">
                    <button class="btn-register">S'inscrire</button>
                    <div class="separator">
                        <span>ou</span>
                    </div>
                    <button class="btn-login" onclick="openLogin()">Se connecter</button>
                </div>
            </aside>

            <div class="form-popup" id="myForm">
                <form action="/action_page.php" class="form-container">

                    <button type="button" class="cancel" onclick="closeLogin()">X</button>

                    <img src="<?php echo base_url('/images/logo.png'); ?>" />
                    
                    <h1 class="title-popup">Connectez-vous à <br>Twitter</h1>

                    <label for="email"></label>
                    <input type="text" placeholder="Addresse e-mail" name="email" required>

                    <label for="psw"></label>
                    <input type="password" placeholder="Mot de Passe" name="psw" required>

                    <button type="submit" class="btn">Se connecter</button>
                </form>
            </div>
        </main>
        <footer></footer>

        <script src="<?php echo base_url('/js/loginForm.js'); ?>" async></script>
    </body>
</html>
