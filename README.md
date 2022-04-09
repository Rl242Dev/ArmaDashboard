# ArmaDashboard

# 📄 Requirements :

  - Symfony ([symfony])
  - WSL (Search on Microsoft Store for 'Ubuntu')
  - Php/Mysql Knowledge ([php], [mysql])

# 📑 Installation :

Using Symfony create a WebApp :

    symfony new **** --webapp
    
1. Go in ./src/Controller, and create a file named Query.php then copy and paste the content of the [query] of this Repo.
2. Go in ./templates, and copy and paste into base.html.twig the content of the [html.twig] of this Repo.
3. Then go into your WSL and copy and paste this command "composer require symfony/asset".
4. Go in ./public, and create a folder named "css" then create a file named "blog.css" and copy and paste into it the content of [blog.css] of this Repo.
5. Go in ./config, and copy and paste into routes.yaml the content of the [routes] of this Repo.

We have finished the symfony part.

1. Connect to your mysql, "mysql -u *** -p".
2. Create a Database named ArmaPanel "CREATE DATABASE ArmaPanel;" + "USE ArmaPanel;"
3. Create a Table named ArmaData "CREATE TABLE ArmaData (name char(50), gang char(20), bank FLOAT, weapon char(50));"
4. Insert data into it using mysql or use this repo [SqlInsert] in python.
    
# 🔧 Usage :

Project to keep an eye on each of your players in your database.

    symfony server:start
    
Then type "localhost:8000/Query" in the research bar and there's the site up and running only for you! The site might look bad since i didn't had the time to make it responsive.

You can change the requests to your database in the Query.php, like 

![image](https://user-images.githubusercontent.com/74558778/162565799-dd6f7e78-4f01-4116-8b1f-975a1ec6f2b8.png)


[php]: https://www.php.net/downloads
[mysql]: https://phoenixnap.com/kb/install-mysql-ubuntu-20-04
[symfony]: https://symfony.com/doc/current/setup.html
[html.twig]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/base.html.twig
[query]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/Query.php
[blog.css]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/blog.css
[routes]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/routes.yaml
[SqlInsert]: https://github.com/Rl242Dev/IpSelector
