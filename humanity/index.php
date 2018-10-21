<!--
/**
 * Created by PhpStorm.
 * User: Marejean
 * Date: 16/10/2016
 * Time: 2:53 PM
 */
-->
<html>
    <head>
        <title>Welcome to Darkness</title>
        <link href="../css/dhet.css" rel="stylesheet" type="text/css" />

        <script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../js/functionality.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">

            <div style="top: 0; background: #000000; left: auto; width: 100%" class="fixed component-center">
                <h1 class="component-center fixed" style="width: 100%;"><img src="../files/Logo.png"></h1>
                <br /><br /><br /><br />
                <form class="component-center" onsubmit="search(); return false;">
                    <select id="filter" class="component-center">
                        <option value="std_id">ID</option>
                        <option value="fullname">Name</option>
                        <option value="program">Program Code</option>
                        <option value="description">Program Description</option>
                    </select>
                    <input type="text" id="keyWord" placeholder="keyWord"/>
                </form>


            </div>
            <table style="position: relative; top: 130px; z-index: 0;" class="light-text" id="result"></table>
        </div>
    </body>

</html>