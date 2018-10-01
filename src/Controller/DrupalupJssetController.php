<?php

namespace Drupal\drupalup_jsset\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Output of our JS page.
 */
class DrupalupJssetController extends ControllerBase {

  public function jsPage() {

    $build = [];
    $build['content'] = [
      '#markup' => '<div class="js-var">Our JS Page</div>',
    ];
    $build['#attached']['library'][] = 'drupalup_jsset/js_example';
    $build['#attached']['drupalSettings']['js_example']['title'] = $this->config('system.site')->get('name');

    return $build;
  }

}
