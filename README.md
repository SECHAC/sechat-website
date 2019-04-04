SECHAT, the website
============================

This repo contains the website for the SECHAT organisation. The website is public at: https://sechat.dbwebb.se/

Clone the repo to run the website locally and contribute your PRs.



Maintain and update content
----------------------------

All content is in the directory `view/`. Edit those files to update the website.



Run the website
----------------------------

There are various options on how to actually run the website, choose one of your liking.



### Run with local development environment

1. Install Apache and PHP 7.2
1. Do `composer install`
1. Do `chmod 777 cache/*`

Point your web browser to the `htdocs/` directory.



### Run with docker and docker-compose

1. Start the docker container with `docker-compose up -d website`

Point your web browser to the `http://localhost:11042`.

The directory `view/` is mounted onto the container so you can update the web files and reload to see your changes.

The actual docker image is hosted on https://hub.docker.com/r/dbwebb/sechat.



### Create a target server environment

This is advanced usage and only to create the production environment and it roughly goes like this.

The source should be at `$HOME/git/sechat.dbwebb.se`.

The target directory is created at `$HOME/htdocs/sechat.dbwebb.se/`

Create a base for http.

```
make site-build
make virtual-host
make local-publish
```

Create a base for https, once you have http.

```
make ssl-cert-create
make virtual-host-https
```

You might need to chmod the cache dir, and perhaps create the log dir. But you will se what happens...



Acknowledgement
-------------------

This is a co-effort of several people using freely available documentation and tools from the open source community.

Leonore made it come true.

For more contributors, see commit history and issues.



```
 .
..:  Copyright (c) 2018-2019 SECHAT, info@dbwebb.se
```
