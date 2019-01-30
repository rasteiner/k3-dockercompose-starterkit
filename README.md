## What
Kirby 3 starterkit running on docker-compose with nginx connected to php-fpm on a unix socket. 
Kirby is installed with a custom folder setup so that only the `assets` and `media` folder (and `index.php`) is exposed to nginx. 

## Why 
As a starting point for such setups. 

## How
You obviously need a working, modern, docker environment set up. You also need PHP and composer installed on your host, since the vendor folder with Kirby and dependencies is excluded from git.

1. Install dependencies:
    ```bash
    # in frontend folder
    composer install --no-dev --prefer-dist
    ```
2. Build and run the images
    ```bash
    # in root folder
    docker-compose up
    ```

Notice that the `site` and `vendor` folders get built into the image. If you change something there you have to rebuild with `docker-compose up --build`.

## Next steps / whishlist
1. Create an alternative version of `docker-compose.yml` that mounts the `site` and `vendor` folders into the container from host, making development easier. 

## Contributions
I'm not a DevOps guy. I'm sure this setup isn't optimal yet (maybe it's even dangerous). 

Suggestions are welcome and my hopes are that this becomes a place for best practices about Kirby 3, nginx, php-fpm and docker. 