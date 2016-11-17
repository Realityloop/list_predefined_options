<?php

/**
 * @file
 * Contains \Drupal\list_predefined_options\Annotation\ListOptions.
 */

namespace Drupal\list_predefined_options\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a List options item annotation object.
 *
 * @see \Drupal\list_predefined_options\Plugin\ListOptionsManager
 * @see plugin_api
 *
 * @Annotation
 */
class ListOptions extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
