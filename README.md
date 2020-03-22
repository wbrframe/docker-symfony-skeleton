# Docker Skeleton for new Symfony 5 projects

**Skeleton** - designed to quickly deploy environments for new Symfony 5 projects. Сontains a minimal stack for begin development.

### Environment
- nginx 1.17
- php-fpm 7.3
- postgresql 11.5
- xdebug 2.7.1

### Requirements
Linux, Docker compose, Git and as the main IDE is PhpStorm (preferably the latest version with Shell Configuration supports).

### Installation
First, create a folder for your project and clone the repository:

```bash
mkdir /var/www/skeleton
cd /var/www/skeleton
git clone https://github.com/wbrframe/docker-symfony-skeleton.git .
```

Open `/var/www/skeleton` folder in PhpStorm and run next configurations:
1. Start Application
2. Composer -> Install (after execute, it will take a little time to index the installed vendors)
3. Database - Recreate database
4. Delete skeleton repository info `rm -rf /var/www/skeleton/.git`

Go to `http://localhost` page in your browser. If the installation is successful, you will see the text:
> Database skeleton is ready.

### PhpStorm settings

It remains to perform small settings PhpStorm for correct xdebug work.

![PhpStorm settings](../assets/phpstorm_setting_1.gif?raw=true)

### Useful configurations

You can use the predefined scripts in `composer.json` by running the command

```bash
docker-compose exec php composer `<script>`
```

**Availables scripts:**

|  Script name | Description  |
| ------------ | ------------ |
| ci:code-style  | [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer "php-cs-fixer") in `dry-run` mode  |
| ci:code-style-fix  | [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer "php-cs-fixer") without `dry-run` mode  |
| ci:static-analysis  | [phpstan](https://github.com/phpstan/phpstan "phpstan") analysis `src` and `tests` folders with 7 level  |
| ci:lint-twig | check all files in `templates` folder  |
| ci:lint-yaml  |  check all files in `config` and `translations` folders  |
| ci:composer-validate  | composer validate command  |
| ci:security-check  | [security-checker](https://github.com/sensiolabs/security-checker "security-checker") of sensiolabs  |
| ci:schema-validate  |  doctrine schema validatate command |
| app:recreate-database  | a set of commands to create the database, schema and load fixtures  |

Some script can be executed from predefined `Run Configurations`:

|  Group | Command | Description | 
| ------------ | ------------ | ------------ | 
| Composer | Install | ~  |
| Composer | Update | ~ |
| Database | Recreate database | ~ |
| Database | Validate schema | ~ |
| Quality tools | CI Pack | Run all **ci:*** scripts |
| Quality tools | Code style | Run `php-cs-fixer` in `dry-run` mode  |
| Symfony  | Cache clear | ~ |

![PhpStorm settings](../assets/cli_scripts_1.gif?raw=true)
