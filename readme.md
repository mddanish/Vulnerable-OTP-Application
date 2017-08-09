# Vulnerable OTP Application

Vulnerable OTP Application created using PHP & Google OTP 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the application onto.

```
1. Web Server (Apache recommended)
2. PHP 7 and above
3. Mysql or MariaDB
```

### Installing

A step by step series of examples that tell you have to get the application running

After installing Apache, PHP 7 and MariaDB, which I think that you know how to install, or else google about it.

Setting up Application database.

```
Run SQL File vuln_otp.sql against MariaDB to create necessary Database, Table and Columns
```

Adding Database details to application

```
Edit config > db_connection.php and details of Database connections details (Hostname, Username, Password, Database Name)
```

Open the Application in browser and have fun.

## Running the tests

You can use Burp suite or Browser web developer mode to bypass OTP login.
Remember to Register a test user before Bypassing it, and use Google Authenticator for OTP

## Application available ONLINE

Skip installation and setup and use the mention link hosted for testing OTP Bypass
1. [Vulnerable OTP Application](http://otp-2fa.mohammeddanishamber.com)
2. [Vulnerable OTP Application](https://otp-2fa.000webhostapp.com/)

TEST USER CREATED on APPLICATION for testing, or create new user if you want

USERNAME: test

EMAIL: test@test.com

PASSWORD: P@ssw0rd

SCAN the below use Google Authenticator for OTP generation and login and bypass
GOOGLE OTP QR

![TEST OTP-2FA](https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2Ftest%40test.com%3Fsecret%3D32REDZU7WZ45Z4OC%26issuer%3DOTP-2FA")

DO NOT CRASH THE SEVER OR APPLICATION.
PLAY SAFE.

## Authors

* **Mohammed Danish amber** - *Initial work* - [Mohammed Danish Amber](http://www.mohammeddanishamber.com)

## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](https://github.com/mddanish/Vulnerable-OTP-Application/blob/master/LICENSE) file for details

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc
