<html>
    <head>
        <title>Log-in</title>
        <link href="../css/dhet.css" rel="stylesheet" type="text/css" />
        <link href="../css/login.css" rel="stylesheet" type="text/css" />

        <script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../js/functionality.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">
            <h1 class="component-center"><img src="../files/Logo.png"></h1>
            <div>
                <br /><br /><br />
                <form class="component-center" onsubmit="login(); return false;">
                    <input type="password" id="username" placeholder="username" /><br><br><br>
                    <input type="password" id="password" placeholder="password" />
                </form>
            </div>
        </div>
    </body>

</html>