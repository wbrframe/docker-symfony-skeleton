<p align="center">
  <img src="https://github.com/wbrframe/wbrframe/blob/main/repository/docker-symfony-skeleton/assets/logo.jpg" alt="Symfony Skeleton Logo" style="height: 100px">
</p>

**Skeleton** is crafted to swiftly set up the environment for new Symfony projects.

Сontains a minimal stack for begin development: nginx, php, xdebug and minimal set symfony components for type of project as microservice, console application or API.

### Environment
- nginx 1.25
- php-fpm 8.3
- xdebug 3.3
- symfony 7

### Requirements

---
Docker compose, Git and PhpStorm as the main IDE (preferably the latest version with shell configuration supports).

### Installation

---

Decide on versions and clone the corresponding branch.

    git clone -b php8_symfony7 https://github.com/wbrframe/docker-symfony-skeleton <project_dir>
    cd <project_dir>
    rm -rf .git

Up containers and install dependencies.

```bash
docker compose up -d --build
docker compose exec php composer install
```

Go to `http://localhost` page in your browser. If the installation is successful, you will see the default welcome page.

### Tools

---
You can use the predefined scripts in `composer.json` by running the command

```bash
docker-compose exec php composer `<script>`
```

**Availables scripts:**

| Script name          | Description                                                                                                |
|----------------------|------------------------------------------------------------------------------------------------------------|
| ci:code-style        | [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer "php-cs-fixer") in `dry-run` mode              |
| ci:code-style-fix    | [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer "php-cs-fixer") without `dry-run` mode         |
| ci:static-analysis   | [phpstan](https://github.com/phpstan/phpstan "phpstan") analysis a set folders specified in phpstan config |
| ci:lint-yaml         | check all files in `config` folder                                                                         |
| ci:composer-validate | composer validate command                                                                                  |
| ci:security-check    | [security-checker](https://github.com/fabpot/local-php-security-checker "security-checker") of sensiolabs  |
| ci:pack              | execute all scripts under in ci:* scope                                                                    |
