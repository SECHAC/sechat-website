#!/usr/bin/env make
#
# Docker containers for dbwebb related stuff.
# See repo on GitHub: https://github.com/dbwebb-se/docker
# See organisation on Docker: https://hub.docker.com/r/dbwebb


# ------------------------------------------------------------------------
#
# General stuff, reusable for all Makefiles.
#

# Detect OS
OS = $(shell uname -s)

# Defaults
ECHO = echo

# Make adjustments based on OS
ifneq (, $(findstring CYGWIN, $(OS)))
	ECHO = /bin/echo -e
endif

# Colors and helptext
NO_COLOR	= \033[0m
ACTION		= \033[32;01m
OK_COLOR	= \033[32;01m
ERROR_COLOR	= \033[31;01m
WARN_COLOR	= \033[33;01m

# Print out colored action message
ACTION_MESSAGE = $(ECHO) "$(ACTION)---> $(1)$(NO_COLOR)"

# Which makefile am I in?
WHERE-AM-I = $(CURDIR)/$(word $(words $(MAKEFILE_LIST)),$(MAKEFILE_LIST))
THIS_MAKEFILE := $(call WHERE-AM-I)

# Echo some nice helptext based on the target comment
HELPTEXT = $(call ACTION_MESSAGE, $(shell egrep "^\# target: $(1) " $(THIS_MAKEFILE) | sed "s/\# target: $(1)[ ]*-[ ]* / /g"))

# Check version  and path to command and display on one line
CHECK_VERSION = printf "%-15s %-10s %s\n" "`basename $(1)`" "`$(1) --version $(2)`" "`which $(1)`"

# Get current working directory, it may not exist as environment variable.
PWD = $(shell pwd)

# target: help                    - Displays help.
.PHONY:  help
help:
	@$(call HELPTEXT,$@)
	@sed '/^$$/q' $(THIS_MAKEFILE) | tail +3 | sed 's/#\s*//g'
	@$(ECHO) "Usage:"
	@$(ECHO) " make [target] ..."
	@$(ECHO) "target:"
	@egrep "^# target:" $(THIS_MAKEFILE) | sed 's/# target: / /g'



# ------------------------------------------------------------------------
#
# Specifics for this project.
#
D  := docker
DC := docker-compose
# options = --no-cache



# target: update                  - Create the Dockerfiles from source.
.PHONY: update
update:
	@$(call HELPTEXT,$@)
	[ ! -f update.bash ] || ./update.bash



# target: build                   - Build the docker images.
.PHONY: build
build: update
	@$(call HELPTEXT,$@)
	$(D) build $(options) --file Dockerfile	\
		--tag dbwebb/sechat:latest			\
		--tag dbwebb/sechat:website			\
		.



# target: push                    - Push the docker images to Docker cloud.
.PHONY: push
push:
	@$(call HELPTEXT,$@)
	$(D) push dbwebb/sechat:latest
	$(D) push dbwebb/sechat:website
