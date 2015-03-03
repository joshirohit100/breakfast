<?php

/**
 * @file
 * Contains Drupal\breakfast\Controller\DefaultController.
 */

namespace Drupal\breakfast\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {

    $account = \Drupal::currentUser()->getAccount();

    $breakfast_choice = $account->field_breakfast_choice->value;
    print_r($account);

    $build['breakfast_choice'] = [
      '#markup' => '<h2>' . $breakfast_choice . '</h2>',
    ];

    return $build;
  }
}
