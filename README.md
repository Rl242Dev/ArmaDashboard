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
3. Go in ./public, and create a folder named "css" then create a file named "blog.css" and copy and paste into it the content of [blog.css] of this Repo.
4. Go in ./config, and copy and paste into routes.yaml the content of the [routes] of this Repo.
    
# 🔧 Usage :

Project to keep an eye on each of your players in your database.

    symfony server:start
    
Then type "localhost:8000/Query" in the research bar and there's the site up and running only for you! The site might look since i didn't had the time to make it responsive.

[php]: https://www.php.net/downloads
[mysql]: https://phoenixnap.com/kb/install-mysql-ubuntu-20-04
[symfony]: https://symfony.com/doc/current/setup.html
[html.twig]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/base.html.twig
[query]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/Query.php
[blog.css]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/blog.css
[routes]: https://github.com/Rl242Dev/ArmaDashboard/blob/main/routes.yaml
