<?php require_once '../component/header.php'?>



    <main>
        <!-- Signin form starts -->
        <div class="form-background">

            <div class="signInForm">
                <h1 class="text-center mb-3 text-light">LOGIN</h1>
                <form action="" name="" method="" enctype="">

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" placeholder="Email Address" name="email" class="txtb"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" placeholder="Password" class="txtb"><br>
                    <input type="submit" value="Login" class="signin-btn" style="background-color: #03254E; color: #F1E4E8;"><br>
                    <a href="usereg.php">Don't have an account yet?</a>
                    <a href="#">Forgotten your password?</a>

                </form>
            </div>


        </div>
        <!-- Signin Form ends -->
    </main>

    <?php

require_once "../component/footer.php";
?>