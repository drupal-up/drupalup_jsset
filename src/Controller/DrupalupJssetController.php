<?php

namespace Drupal\drupalup_jsset\Controller;

/**
 * Output of our JS page.
 */
class DrupalupJssetController {

  public function jsPage() {
    $build = [];
    $build['content'] = [
      '#markup' => '<div class="js-var">Our JS Page</div>',
    ];
    $build['#attached']['library'][] = 'drupalup_jsset/js_example';
    $build['#attached']['drupalSettings']['js_example']['title'] = 'Test text';

    return $build;
  }

}
