## What
Kirby 3 starterkit running on docker-compose with nginx connected to php-fpm on a unix socket. 
Kirby is installed with a custom folder setup so that only the `assets` and `media` folder (and `index.php`) is exposed to nginx.

The original starterkit is over here: https://github.com/getkirby/starterkit

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

### Development
During development you might want to mount your working directory into the php container, so you don't need to rebuild for every change.
A `docker-compose.dev.yml` file is included with the volume instructions. 

For development start `docker-compose` including the file with this command:

```bash
# in root folder
docker-compose -f docker-compose.yml -f docker-compose.dev.yml up
```

## Next steps / whishlist
1. Optimize: Maybe add a cache service. 
2. Create a `prod` yml file with instructions about restarts and stuff.

## Contributions
I'm not a DevOps guy. I'm sure this setup isn't optimal yet (maybe it's even dangerous). 

Suggestions are welcome and my hopes are that this becomes a place for best practices about Kirby 3, nginx, php-fpm and docker. 