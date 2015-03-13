<?php

/**
 * @file
 * Contains \Drupal\breakfast\Annotation\Breakfast.
 */

namespace Drupal\breakfast\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a flavor item annotation object.
 *
 * Plugin Namespace: Plugin\breakfast\flavor
 *
 * @see \Drupal\breakfast\Plugin\IcecreamManager
 * @see plugin_api
 *
 * @Annotation
 */
class Breakfast extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the formatter type.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

  /**
   * The name of the field formatter class.
   *
   * This is not provided manually, it will be added by the discovery mechanism.
   *
   * @var string
   */
  public $image;

  /**
   * An array of field types the formatter supports.
   *
   * @var array
   */
  public $ingredients = array();
}
