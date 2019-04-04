Docker for SECHAT website
-------------------

Docker images for working with SECHAT website.

The [organisation SECHAT is on GitHub](https://github.com/SECHAC).

The [website for SECHAT is on GitHub](https://github.com/SECHAC/sechat-website).



Supported tags and respective Dockerfile links
-------------------



### Complete course repos

The particular course repo installed in the docker image.

* [`website`, `latest` (Dockerfile)](https://github.com/SECHAC/sechat-website/blob/master/docker/Dockerfile)



Quick reference
-------------------

* Where to get help:
    https://github.com/SECHAC/sechat-website/issues

* Where to file issues:
    https://github.com/SECHAC/sechat-website/issues

* Maintained by:
    [SECHAT organisation and community](https://github.com/SECHAC)

* Source of this description:
    [docker/doc/README.md](https://github.com/SECHAC/sechat-website/blob/master/docker/doc/README.md)



How to use this image
-------------------



### With docker-compose

Create a `docker-compose.yml`. The repo should contain [such a file](https://github.com/SECHAC/sechat-website/blob/master/docker-compose.yml).

```text
version: "3"
services:
    website:
        image: dbwebb/sechat:website
        #volumes:
            #- "view:/home/dbwebb/repo/view:r"
            #- "apache.conf:/etc/apache2/sites-available/000-default.conf:r"
        ports: [ "11042:80" ]
```

You can optionally mount parts of the website repo onto the container, this makes it possible to develop and maintain content in the website and only testing updates through the docker container.

Start (and build) the container in the background.

```text
docker-compose up -d website
```

Open a browser to localhost:11042.

Run a bash terminal on the running container.

```text
docker-compose exec website bash
```

Stop running a container.

```text
docker-compose stop website
```

Start the container.

```text
docker-compose start website
```

Shut down the container.

```text
docker-compose down
```

Run a one off command using an existing container.

```text
docker-compose run website bash
```



License
-------------------

As with all Docker images, these likely also contain other software which may be under other licenses (such as Bash, etc from the base distribution, along with any direct or indirect dependencies of the primary software being contained).

As for any pre-built image usage, it is the image user's responsibility to ensure that any use of this image complies with any relevant licenses for all software contained within.



Acknowledgement
-------------------

This is a co-effort of several people using freely available documentation and tools from the open source community.

For contributors, see commit history and issues.




```
 .
..:  Copyright (c) 2018-2019 SECHAT, info@dbwebb.se
```
