<?php

                   // DB details
                    $dbHost = 'localhost';
                    $dbUsername = 'root';
                    $dbPassword = '';
                    $dbName = 'tugasakhirppk';

                    //Create connection and select DB
                    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                    $query = "SELECT * FROM `barang`";
                    $exec = mysqli_query($db, $query) or die("Bad Connection");

                    $opt = "<select name='barangku'";
                    while ($row = mysqli_fetch_asoc($exec){
                        $opt .= "<option value ='{$row['Nama_Barang']}'> {$row['Nama_Barang'] } </option>\n;
                    }
                $opt .= "</select>"

                ?>