# BrianCP (Control Panel)

A control panel project for use with all web-servers such as: Apache2 and Nginx. It is mostly designed with use on Windows operating systems, but it will obviously work on anything that supports PHP.

## Documentation

Open folder ```/doc/``` to receive information per folder basis.

## Installation
Last tested on commit: ```f4b23ff127453163a3f99957bf2c224f4412534e```

* 1.) Copy the insides of ```src/www``` into your web-directory folder.
* 2.) Run the ```/sql/briancp.sql``` query.
* 3.) Navigate to your website, create an account and login.

## Requirements ```recommended```

* I can recommend using [XAMPP](https://www.apachefriends.org/download.html) for compatability, but you can use anything below as well.

##### Installing BrianCP by using these stand-alone packages:
* [Apache 2.4.54](https://)
* [PHP 8.1.10](https://)
* [MariaDB 10.4.24](https://)
* [OpenSSL 1.1.1p](https://)

## Development
The layout of this project is designed in a way which allows easy deployment for the end-user. In case you're sending a  pull-request, make sure all personal information has been cleaned (think: `config.php` or changes to the database: `database.sql`)

## Contributors
[Contributors](Contributors.md)

## Copyright
[License](LICENSE): GPL 2.0

