<div class="login-form">
    <h1>Login</h1>
    <div class="columns" id="login">
        <form method="post">
            <div class="container-login">
                <label for="username">Username:</label><br>
                <input id="username" type="text" placeholder="Enter Username" name="username" required pattern="[a-zA-Z0-9]+"><br>

                <label for="password">Password:</label><br>
                <input id="password" type="password" placeholder="Enter Password" name="password" required><br>

                <button class="button" type="submit">Login</button><br>

                <p>You don't have an account? <a href="index.php?page=register">Register now!</a></p><br>
            </div>
        </form>
    </div>
</div>