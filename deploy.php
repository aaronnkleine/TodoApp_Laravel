<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/php-fpm.php';
require 'contrib/npm.php';

set('application', 'TodoApp');
set('repository', 'git@github.com:aaronnkleine/TodoApp_Laravel.git');
set('php_fpm_version', '8.0');
set('git_tty', false);
set('allow_anonymous_stats', false);
set('writable_mode', 'chmod');

add('shared_files', [
    'public/.htpasswd',
    'public/.htaccess',
]);
add('shared_dirs', []);
add('writable_dirs', []);

// Define staging environment
host('staging')
    ->setHostname('37.202.2.195')
    ->setRemoteUser('p673504')
    ->set('http_user', 'p673504')
    ->setPort(22)
    ->setDeployPath('~/html/TodoApp_Laravel/staging')
    ->setIdentityFile('~/.ssh/id_rsa')
    ->setForwardAgent(true)
    ->setSshMultiplexing(true)
    ->setSshArguments(['-o UserKnownHostsFile=/dev/null', '-o StrictHostKeyChecking=no']);

// Define production environment
host('production')
    ->setHostname('37.202.2.195')
    ->setRemoteUser('p673504')
    ->set('http_user', 'p673504')
    ->setPort(22)
    ->setDeployPath('~/html/TodoApp_Laravel/production')
    ->setIdentityFile('~/.ssh/id_rsa')
    ->setForwardAgent(true)
    ->setSshMultiplexing(true)
    ->setSshArguments(['-o UserKnownHostsFile=/dev/null', '-o StrictHostKeyChecking=no']);

task('opcache:reset', function () {
    run('cd {{release_path}} && php -r "opcache_reset();"');
});

task('application:clear', function () {
    run('cd {{release_path}} && npm install');
    run('cd {{release_path}} && npm run build');
    run('cd {{release_path}} && php artisan cache:clear');
    run('cd {{release_path}} && sudo chown -R www-data:www-data bootstrap/');
    run('cd {{release_path}} && sudo chown -R www-data:www-data storage/');
    run('cd {{release_path}} && sudo chmod -R 777 bootstrap/cache/');
});

after('deploy:symlink', 'application:clear');
after('application:clear', 'opcache:reset');
after('deploy:failed', 'deploy:unlock');
before('deploy:symlink', 'artisan:migrate');
