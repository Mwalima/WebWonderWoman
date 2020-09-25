<html>
<p>
                                                                                                          admin@IDMY:~$ sudo su
                                                                                                        Password:
                                                                                                        ash-4.3# cd /volume1/project/
                                                                                                        ash-4.3# ls
                                                                                                        {directory}  @eaDir  laravel  #recycle
                                                                                                        ash-4.3# rm -rf laravel/
                                                                                                        ash-4.3# php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                                                                                                        ash-4.3# php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
                                                                                                        Installer verified
                                                                                                        ash-4.3# php composer-setup.php
                                                                                                        All settings correct for using Composer
                                                                                                        Downloading...

                                                                                                        Composer (version 1.6.5) successfully installed to: /volume1/project/composer.phar
                                                                                                        Use it: php composer.phar

                                                                                                        ash-4.3# php -r "unlink('composer-setup.php');"
                                                                                                        ash-4.3# php ~/composer.phar
                                                                                                        Could not open input file: /root/composer.phar
                                                                                                        ash-4.3# exit
                                                                                                        exit
                                                                                                        admin@IDMY:~$ cd /volume1/project/
                                                                                                        admin@IDMY:/volume1/project$ php ~/composer.phar
                                                                                                        Could not open input file: /var/services/homes/admin/composer.phar
                                                                                                        admin@IDMY:/volume1/project$ sudo php ~/composer.phar
                                                                                                        Password:
                                                                                                        Could not open input file: /var/services/homes/admin/composer.phar
                                                                                                        admin@IDMY:/volume1/project$ php70 composer.phar
                                                                                                        ______
                                                                                                        / ____/___  ____ ___  ____  ____  ________  _____
                                                                                                        / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
                                                                                                        / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
                                                                                                        \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                                                                                                        /_/
                                                                                                        Composer version 1.6.5 2018-05-04 11:44:59

                                                                                                        Usage:
                                                                                                        command [options] [arguments]

                                                                                                        Options:
                                                                                                        -h, --help                     Display this help message
                                                                                                        -q, --quiet                    Do not output any message
                                                                                                        -V, --version                  Display this application version
                                                                                                        --ansi                     Force ANSI output
                                                                                                        --no-ansi                  Disable ANSI output
                                                                                                        -n, --no-interaction           Do not ask any interactive question
                                                                                                        --profile                  Display timing and memory usage information
                                                                                                        --no-plugins               Whether to disable plugins.
                                                                                                        -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
                                                                                                        -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

                                                                                                        Available commands:
                                                                                                        about                Shows the short information about Composer.
                                                                                                        archive              Creates an archive of this composer package.
                                                                                                        browse               Opens the package's repository URL or homepage in your browser.
                                                                                                        check-platform-reqs  Check that platform requirements are satisfied.
                                                                                                        clear-cache          Clears composer's internal package cache.
                                                                                                        clearcache           Clears composer's internal package cache.
                                                                                                        config               Sets config options.
                                                                                                        create-project       Creates new project from a package into given directory.
                                                                                                        depends              Shows which packages cause the given package to be installed.
                                                                                                        diagnose             Diagnoses the system to identify common errors.
                                                                                                        dump-autoload        Dumps the autoloader.
                                                                                                        dumpautoload         Dumps the autoloader.
                                                                                                        exec                 Executes a vendored binary/script.
                                                                                                        global               Allows running commands in the global composer dir ($COMPOSER_HOME).
                                                                                                        help                 Displays help for a command
                                                                                                        home                 Opens the package's repository URL or homepage in your browser.
                                                                                                        info                 Shows information about packages.
                                                                                                        init                 Creates a basic composer.json file in current directory.
                                                                                                        install              Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
                                                                                                        licenses             Shows information about licenses of dependencies.
                                                                                                        list                 Lists commands
                                                                                                        outdated             Shows a list of installed packages that have updates available, including their latest version.
                                                                                                        prohibits            Shows which packages prevent the given package from being installed.
                                                                                                        remove               Removes a package from the require or require-dev.
                                                                                                        require              Adds required packages to your composer.json and installs them.
                                                                                                        run-script           Runs the scripts defined in composer.json.
                                                                                                        search               Searches for packages.
                                                                                                        self-update          Updates composer.phar to the latest version.
                                                                                                        selfupdate           Updates composer.phar to the latest version.
                                                                                                        show                 Shows information about packages.
                                                                                                        status               Shows a list of locally modified packages, for packages installed from source.
                                                                                                        suggests             Shows package suggestions.
                                                                                                        update               Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
                                                                                                        upgrade              Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
                                                                                                        validate             Validates a composer.json and composer.lock.
                                                                                                        why                  Shows which packages cause the given package to be installed.
                                                                                                        why-not              Shows which packages prevent the given package from being installed.
                                                                                                        admin@IDMY:/volume1/project$ php composer.phar
                                                                                                        ______
                                                                                                        / ____/___  ____ ___  ____  ____  ________  _____
                                                                                                        / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
                                                                                                        / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
                                                                                                        \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                                                                                                        /_/
                                                                                                        Composer version 1.6.5 2018-05-04 11:44:59

                                                                                                        Usage:
                                                                                                        command [options] [arguments]

                                                                                                        Options:
                                                                                                        -h, --help                     Display this help message
                                                                                                        -q, --quiet                    Do not output any message
                                                                                                        -V, --version                  Display this application version
                                                                                                        --ansi                     Force ANSI output
                                                                                                        --no-ansi                  Disable ANSI output
                                                                                                        -n, --no-interaction           Do not ask any interactive question
                                                                                                        --profile                  Display timing and memory usage information
                                                                                                        --no-plugins               Whether to disable plugins.
                                                                                                        -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
                                                                                                        -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

                                                                                                        Available commands:
                                                                                                        about                Shows the short information about Composer.
                                                                                                        archive              Creates an archive of this composer package.
                                                                                                        browse               Opens the package's repository URL or homepage in your browser.
                                                                                                        check-platform-reqs  Check that platform requirements are satisfied.
                                                                                                        clear-cache          Clears composer's internal package cache.
                                                                                                        clearcache           Clears composer's internal package cache.
                                                                                                        config               Sets config options.
                                                                                                        create-project       Creates new project from a package into given directory.
                                                                                                        depends              Shows which packages cause the given package to be installed.
                                                                                                        diagnose             Diagnoses the system to identify common errors.
                                                                                                        dump-autoload        Dumps the autoloader.
                                                                                                        dumpautoload         Dumps the autoloader.
                                                                                                        exec                 Executes a vendored binary/script.
                                                                                                        global               Allows running commands in the global composer dir ($COMPOSER_HOME).
                                                                                                        help                 Displays help for a command
                                                                                                        home                 Opens the package's repository URL or homepage in your browser.
                                                                                                        info                 Shows information about packages.
                                                                                                        init                 Creates a basic composer.json file in current directory.
                                                                                                        install              Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
                                                                                                        licenses             Shows information about licenses of dependencies.
                                                                                                        list                 Lists commands
                                                                                                        outdated             Shows a list of installed packages that have updates available, including their latest version.
                                                                                                        prohibits            Shows which packages prevent the given package from being installed.
                                                                                                        remove               Removes a package from the require or require-dev.
                                                                                                        require              Adds required packages to your composer.json and installs them.
                                                                                                        run-script           Runs the scripts defined in composer.json.
                                                                                                        search               Searches for packages.
                                                                                                        self-update          Updates composer.phar to the latest version.
                                                                                                        selfupdate           Updates composer.phar to the latest version.
                                                                                                        show                 Shows information about packages.
                                                                                                        status               Shows a list of locally modified packages, for packages installed from source.
                                                                                                        suggests             Shows package suggestions.
                                                                                                        update               Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
                                                                                                        upgrade              Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
                                                                                                        validate             Validates a composer.json and composer.lock.
                                                                                                        why                  Shows which packages cause the given package to be installed.
                                                                                                        why-not              Shows which packages prevent the given package from being installed.
                                                                                                        admin@IDMY:/volume1/project$ php composer.phar self-update
                                                                                                        You are already using composer version 1.6.5 (stable channel).
                                                                                                        admin@IDMY:/volume1/project$ php composer.phar install
                                                                                                        Composer could not find a composer.json file in /volume1/project
                                                                                                        To initialize a project, please create a composer.json file as described in the https://getcomposer.org/ "Getting Started" section
                                                                                                        admin@IDMY:/volume1/project$ php -v
                                                                                                        PHP 5.6.11 (cli) (built: May 19 2018 06:28:12)
                                                                                                        Copyright (c) 1997-2015 The PHP Group
                                                                                                        Zend Engine v2.6.0, Copyright (c) 1998-2015 Zend Technologies
                                                                                                        admin@IDMY:/volume1/project$ composer global require "laravel/installer=~1.1"
                                                                                                        -sh: composer: command not found
                                                                                                        admin@IDMY:/volume1/project$ php composer global require "laravel/installer=~1.1"
                                                                                                        Could not open input file: composer
                                                                                                        admin@IDMY:/volume1/project$ php composer.phar global require "laravel/installer=~1.1"
                                                                                                        Changed current directory to /var/services/homes/admin/.composer
                                                                                                        ./composer.json has been created
                                                                                                        Loading composer repositories with package information
                                                                                                        Updating dependencies (including require-dev)
                                                                                                        Package operations: 12 installs, 0 updates, 0 removals
                                                                                                        - Installing symfony/process (v3.4.11): Downloading (100%)
                                                                                                        - Installing symfony/polyfill-ctype (v1.8.0): Downloading (100%)
                                                                                                        - Installing symfony/filesystem (v3.4.11): Downloading (100%)
                                                                                                        - Installing symfony/polyfill-mbstring (v1.8.0):Downloading (100%)         )
                                                                                                        - Installing psr/log (1.0.2): Downloading (100%)
                                                                                                        - Installing symfony/debug (v3.4.11): Downloading (100%)
                                                                                                        - Installing symfony/console (v3.4.11): Downloading (100%)
                                                                                                        - Installing guzzlehttp/promises (v1.3.1): Downloading (100%)
                                                                                                        - Installing psr/http-message (1.0.1): Downloading (100%)
                                                                                                        - Installing guzzlehttp/psr7 (1.4.2): Downloading (100%)
                                                                                                        - Installing guzzlehttp/guzzle (6.3.3): Downloading (100%)
                                                                                                        - Installing laravel/installer (v1.5.0): Downloading (100%)
                                                                                                        symfony/console suggests installing symfony/event-dispatcher ()
                                                                                                        symfony/console suggests installing symfony/lock ()
                                                                                                        symfony/console suggests installing psr/log-implementation (For using the console logger)
                                                                                                        Writing lock file
                                                                                                        Generating autoload files

</p>