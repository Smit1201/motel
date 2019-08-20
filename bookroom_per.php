<!DOCTYPE html>
<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>

        <div class="w3-container">
            <button onclick="document.getElementById('id01').style.display = 'block'" class="w3-button w3-green w3-large">Login</button>

            <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "super8";

// Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM booking";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                        echo "<form class = w3-container action = /action_page.php>";
                        echo "<div class = w3-section>";
                        echo "<label><b>Username</b></label>";
                        echo '<input class = "w3-input w3-border w3-margin-bottom" type = "text" placeholder = "Enter Username" name = "usrname" required>';
                        echo '<label><b>Password</b></label>';
                        echo '<input class = "w3-input w3-border" type = "password" placeholder = "Enter Password" name = "psw" required>';
                        echo '<button class = "w3-button w3-block w3-green w3-section w3-padding" type = "submit">Login</button>';
                        echo '<input class = "w3-check w3-margin-top" type = "checkbox" checked = "checked"> Remember me';
                        echo '</div>';
                        echo '</form>';

                        echo '<div class = "w3-container w3-border-top w3-padding-16 w3-light-grey">';
                        echo '<button onclick = "document.getElementById("id01").style.display="none" "type = "button" class = "w3-button w3-red">Cancel</button>';
                        echo '<span class = "w3-right w3-padding w3-hide-small">Forgot <a href = "#">password?</a></span>';
                        echo '</div>';
                     }?>
                        </div>
                        </div>
                        </div>

                        </body>
                        </html>
                        