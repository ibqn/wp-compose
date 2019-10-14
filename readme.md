## Build the project

Now, run `docker-compose up -d` from your project directory.

```shell
bash docker-compose.bash up -d
```

This runs `docker-compose` up in detached mode, pulls the needed Docker images, and starts the wordpress and database containers, as shown in the example below.

## Shutdown and cleanup

The command `docker-compose down` removes the containers and default network, but preserves your WordPress database.

The command `docker-compose down --volumes` removes the containers, default network, and the WordPress database.

## More info

 - [Quickstart: Compose and WordPress](https://docs.docker.com/compose/wordpress/)