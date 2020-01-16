# Able - Free Url Shortner

Abel is a script that demonstrate the url shortener and redirection scope, it is not a full fledged url shortner package, abel is a pet project solely for the purpose of explaining the said concept (at bootcamps or in codelabs).
```
PS: This project is not for experts (Senior engineers!) 😃
```

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development, testing and teaching purposes.

## Prerequisites or System Requirements

The requirements are pretty basic so just let me write them down here.

* PHP v5 or higher Server
* MySql database
* Mod_Rewrite enabled
* CSS3 supported web browser
* Register_globals enabled

## Installing

The installation is actually very easy and it circles around only 2 files. I am writing down the steps to install and customize.

Unzip the archive to your server

* Open "includes/db.php" and fill the database settings (read more in configuration option)
* Open "includes/config.php" and fill the optional site settings (read more in configuration option)
* Finally import the MySql database from the folder "SQL" in phpMyadmin
* Go to admin panel from yourdomain.com/admin (e.g "http//localhost/abel/admin") and use accordingly by logging inside with Username: "admin" and Password: "admin1234". You can later change the password from admin panel
* Script is all ready now. Feel free to customize the design but DON'T temper the code (if you need it to work but don't know what you are doing).

## Configuration

Here i will tell you how to configure the necessary installation files **db.php** and **config.php**

### db.php:

* $db_host - Enter the server address of the mysql server in this field. It is usually localhost in most of the cases
* $db_user - Enter the database username
* $db_pass - Enter the database password
* $db_server - Enter the name of the database you have created and imported the sql file into

### config.php:

* $title - Enter the name or title for the website
* $slogan - Enter the slogan or subline for the website
* $description - Enter description for the website
* $keywords - Enter keywords for the website so that search engines may find you
* $adminstatslimit - Enter the number of statistics you want to see in admin panel dashboard. CHOOSE FROM 1-INFINITE
* $webpath - Enter the url address for the website. Do not include www in the url and also add NO trailing slash in the end. Ex: http://domain.com
* $footer - Enter footer text or copyright text to be displayed in the website footer. You can add special characters.
* $link_length - Enter here the length of the trimmed url link you want to make. You can choose between 1-10. The value must not exceed above 10. Ex: http://domain.com/abc

## Authors

* **Emmanuel Adeboje** - *Initial work* - [emmanueldevs](https://github.com/emmanueldevs)

## License

...

## Acknowledgments

* everyone who inspired this 👌

## Support

For support and more inquiries please use the contact form by visiting [my little website](https://emmanueldevs.github.io/) and I'll get back to you as soon as I can

Cheers.

copyright:

late 2019 to early 2020 (just joking) 😃.
