<img src="https://raw.githubusercontent.com/Duedot43/VirtualPass/9964b06f96132ceec968d2db11fc68c2f3a31fe8/src/Images/preview.png" width="100" height=auto onclick='location="https://virtualpass.net"'></img><br>
**Welcome to VirtualPass, a simple yet effective Virtual Hall Pass manager Originally made by: `Duedot43`**<br>
***
## What is VirtualPass?
VirtualPass is a simple website for checking in or out students from a classroom with a scan and go system based off of QR codes.<br><br>
VirtualPass is very easy to set up and requires no third party dependencies, it supplies easy to visualize graphs and system configuration right from the web page.<br><br>
User data is stored outside the readable web scope so only the API with an API key can access this data.<br><br>
***
## Installation
* Download the latest release.<br>

* Unzip the file and move it to `/var/www`. This is assuming you are using an Apache server.<br>

-------------------------------------------------------------------------------------------------------------------------------------------------------------------

What will get installed:
*   `PHP, PHP-PEAR, COMPOSER, NPM, MYSQL`
To install:
*  `sudo apt install apache2`
*  `sudo apt install php`
*  `sudo apt install php-pear`
*  `sudo apt install composer`
*  `sudo apt install npm`
*  `sudo apt install mysql`<br>

***
What next?

Now cd back into your virtualPass directory and run: 
* Install the composer dependinces by running `composer install`<br>
Next:
* Configure your server to run PHP code and tell it the website DIR is at `/var/www/VirtualPass/src/`.
***
## Setup
* go into your config file located at `/var/www/VirtualPass/config/config.ini`.
* Specify settings you want. Descriptions of the settings can be found [here](https://github.com/Duedot43/VirtualPass/wiki). <br>
### Sql Setup
* If you have phpmyadmin then go into it and use the included .sql file to import into a new table
* ( If you do not import it there will be no way to access the website until you add it! )<br>
### Logging in
* For logging in please go to: `'http://<your_website>/admin/login.html` or `'http://<your_website>/login.html`
* Nest use the admin account: username: `root` and password: `root` to login
* now you are in! <br>
### Making a Room
* First, login to the admin portal
* Next click on `Add Room` on the left sidebar
* Then enter the room number for the new room
* Then click `ok`
* (NOTE) It will generate a QR code that you can download, print, then integrate in the classroom.
* after it loads you should see: `https://<your_website>/?room=<room_number>`
* below it should show `Download QR code` you can click it to download the qr code for printing
### You must do this for EVERY classroom!

