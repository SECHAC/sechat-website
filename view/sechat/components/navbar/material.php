<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

$items = $navbarConfig["items"] ?? [];

?>

<!-- Always shows a header, even in smaller screens. -->
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?= $headerTitle ?></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
          <?php foreach ($items as $item) : ?>
              <a class="mdl-navigation__link" title="<?= $item["title"] ?>" href="<?= url($item["url"]) ?>"><?= $item["text"] ?></a>
          <?php endforeach; ?>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><?= $headerTitle ?></span>
    <nav class="mdl-navigation">
        <?php foreach ($items as $item) : ?>
            <a class="mdl-navigation__link" title="<?= $item["title"] ?>" href="<?= url($item["url"]) ?>"><?= $item["text"] ?></a>
        <?php endforeach; ?>
    </nav>
  </div>
