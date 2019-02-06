<?php

namespace Anax\Controller\SechatPages;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * A sample controller to show how a controller class can be implemented.
 * The controller will be injected with $di if implementing the interface
 * ContainerInjectableInterface, like this sample class does.
 * The controller is mounted on a particular route and can then handle all
 * requests for that mount point.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class sechatPages implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

    public function indexAction() : object
    {
        $title = "Welcome";

        $page = $this->di->get("page");
        $page->add("sechat/pages/index", []);
        return $page->render([
            "title" => $title,
        ]);
    }

    public function presentationsAction() : object
    {
        $title = "Presentationer";

        $page = $this->di->get("page");
        $page->add("sechat/pages/presentations", []);
        return $page->render([
            "title" => $title,
        ]);
    }

    public function hackathonAction() : object
    {
        $title = "Hackathon";

        $page = $this->di->get("page");
        $page->add("sechat/pages/hackathon", []);
        return $page->render([
            "title" => $title,
        ]);
    }

    public function networkingAction() : object
    {
        $title = "Nätverka";

        $page = $this->di->get("page");
        $page->add("sechat/pages/networking", []);
        return $page->render([
            "title" => $title,
        ]);
    }

    public function registerAction() : object
    {
        $title = "Anmäl dig";

        $page = $this->di->get("page");
        $page->add("sechat/pages/register", []);
        return $page->render([
            "title" => $title,
        ]);
    }
}
