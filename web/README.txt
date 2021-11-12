These are the basic steps I followed to set up a development environment for this app. 

I am working in macOS.

Install PHP 8.0:
> brew install php@8.0  

Add path to .zshrc:
export PATH="/usr/local/opt/php@8.0/bin:$PATH"
export PATH="/usr/local/opt/php@8.0/sbin:$PATH"

Install composer:
> brew install composer

cd to the web app folder

Install kreait:
> composer require kreait/firebase-php

To start web server, in that folder, run:  
> php -S localhost:8000


