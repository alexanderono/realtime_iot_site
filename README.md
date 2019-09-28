# realtime_iot_site
A site for showing real time temperature and humidity readings of an embedded board.

This could be used to show the most recent row in any table given there is a timestamp value to sort by. 

This project's database works by matching the login username to a row in test_users. user_id acts as a key to device_id, to show the user's devices on devices.php. temp_id and humidity_id are keys to device_id, this is how the readings are taken and updated to the graphs on viewDevice.php

#Installation
Use XAMPP and phpmyadmin, edit the mysqli_connect files to match your database login details. Import the test database with the test.sql file. Navigate to home.php and log in using the details "administrator" and "password". You can then see the sample device and click on it to show the real time readings. 

#notes
This project would have been implemented better using AWS for lower delay between reading and realtime display.
