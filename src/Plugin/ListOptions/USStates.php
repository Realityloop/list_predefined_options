<?php

namespace Drupal\list_predefined_options\Plugin\ListOptions;

use Drupal\list_predefined_options\Plugin\ListOptionsBase;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;

/**
 * @ListOptions(
 *   id = "us_states",
 *   label = @Translation("US States"),
 * )
 */
class USStates extends ListOptionsBase {

  /**
   * {@inheritdoc}
   */
  public function getListOptions(FieldStorageDefinitionInterface $definition, FieldableEntityInterface $entity = NULL, &$cacheable = TRUE) {
    $options['AL'] = t('Alabama');
    $options['AK'] = t('Alaska');
    $options['AZ'] = t('Arizona');
    $options['AR'] = t('Arkansas');
    $options['CA'] = t('California');
    $options['CO'] = t('Colorado');
    $options['CT'] = t('Connecticut');
    $options['DE'] = t('Delaware');
    $options['DC'] = t('District Of Columbia');
    $options['FL'] = t('Florida');
    $options['GA'] = t('Georgia');
    $options['HI'] = t('Hawaii');
    $options['ID'] = t('Idaho');
    $options['IL'] = t('Illinois');
    $options['IN'] = t('Indiana');
    $options['IA'] = t('Iowa');
    $options['KS'] = t('Kansas');
    $options['KY'] = t('Kentucky');
    $options['LA'] = t('Louisiana');
    $options['ME'] = t('Maine');
    $options['MD'] = t('Maryland');
    $options['MA'] = t('Massachusetts');
    $options['MI'] = t('Michigan');
    $options['MN'] = t('Minnesota');
    $options['MS'] = t('Mississippi');
    $options['MO'] = t('Missouri');
    $options['MT'] = t('Montana');
    $options['NE'] = t('Nebraska');
    $options['NV'] = t('Nevada');
    $options['NH'] = t('New Hampshire');
    $options['NJ'] = t('New Jersey');
    $options['NM'] = t('New Mexico');
    $options['NY'] = t('New York');
    $options['NC'] = t('North Carolina');
    $options['ND'] = t('North Dakota');
    $options['OH'] = t('Ohio');
    $options['OK'] = t('Oklahoma');
    $options['OR'] = t('Oregon');
    $options['PA'] = t('Pennsylvania');
    $options['RI'] = t('Rhode Island');
    $options['SC'] = t('South Carolina');
    $options['SD'] = t('South Dakota');
    $options['TN'] = t('Tennessee');
    $options['TX'] = t('Texas');
    $options['UT'] = t('Utah');
    $options['VT'] = t('Vermont');
    $options['VA'] = t('Virginia');
    $options['WA'] = t('Washington');
    $options['WV'] = t('West Virginia');
    $options['WI'] = t('Wisconsin');
    $options['WY'] = t('Wyoming');
    return $options;
  }

}
