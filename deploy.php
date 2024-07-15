<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:aaronnkleine/TodoApp_Laravel.git');


add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('staging')
    ->setHostname('37.202.2.195')
    ->set('remote_user', 'p673504')
    ->set('deploy_path', '~/html/TodoApp_Laravel/staging');


host('production')
    ->setHostname('37.202.2.195')
    ->set('remote_user', 'p673504')
    ->set('deploy_path', '~/html/TodoApp_Laravel/production');

// Hooks

after('deploy:failed', 'deploy:unlock');
