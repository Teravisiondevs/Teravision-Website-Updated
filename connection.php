<?php
                $servername = "sg2plzcpnl458827.prod.sin2.secureserver.net";
                $username = "teravision";
                $password = "root123";
                $dbname = "teravision";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
?>