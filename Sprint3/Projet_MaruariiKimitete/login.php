<?php
    require_once("action/loginAction.php");

    $action = new loginAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>

    <div class="container-login">
        <div class="login">
            <form action="login.php" method="post">
                <div class="container-form-login">
                    <div class="title-login">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="desc-login">
                        <p>YOUR ACCOUNT FOR EVERYTHING UNIQUE SHOES</p>
                    </div>
                    <div class="ligne-form">
                        <p>EMAIL</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="email" id="">
                    </div>
                    <div class="ligne-form">
                        <p>PASSWORD</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="pwd" id="">
                    </div>
                    <div class="ligne-form">
                        <button type="submit"><p>LOGIN</p></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="signin">
            <form action="login.php" method="post">
                <div class="container-form-signin">
                    <div class="title-login">
                        <h1>REGISTER</h1>
                    </div>
                    <div class="desc-login">
                        <p>REGISTER HERE TO BE A PART OF OUR COMMUNITY</p>
                    </div>
                    <div class="ligne-form">
                        <p>NOM</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="nom" id="">
                    </div>
                    <div class="ligne-form">
                        <p>PRENOM</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="prenom" id="">
                    </div>
                    <div class="ligne-form">
                        <p>EMAIL</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="email" id="">
                    </div>
                    <div class="ligne-form">
                        <p>PASSWORD</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="pwd" id="">
                    </div>
                    <div class="ligne-form">
                        <p>CONFIRME PASSWORD</p>
                    </div>
                    <div class="ligne-form">
                        <input type="text" name="confirmepwd" id="">
                    </div>
                    <div class="ligne-form">
                        <button type="submit"><p>REGISTER</p></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php