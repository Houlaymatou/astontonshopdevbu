<?php

namespace Drupal\as_choose\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\as_choose\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Listingpage.
   *
   * @return string
   *   Return Hello string.
   */
  public function listingPage() {
    $query = \Drupal::entityQuery('node');
    //kint($query);
    $query->condition('type', 'chooses');
    $query->condition('status', 1, '=');
    $query->sort('created', 'DESC');
    $result = $query->execute();
    //kint($result);
    $nodes = \Drupal\node\Entity\Node::loadMultiple($result);
    //kint($nodes);
    /* boucle foreach pour reccuperer et afficher les produit*/
    $chooses = [];
    foreach ($nodes as $node) {
       $node_teaser = node_view($node, 'teaser');
       //kint($node_teaser);die();
       $chooses[] = $node_teaser;
    }
 
    return [
     /* '#type' => 'container',
     * '#attributes' => [
     * 'class' => ['col-md-6', 'well'],
      *'id' => 'myFirstDiv',
     * 'data-role' => 'choose',
     * ],
     * '#children' => [
     * 'text' => [
    * '#type' => 'markup',
    *  '#markup' => 'Les modèles de chaussures',
        ],
      ],
    */
      '#theme' => 'choose_list',
      'chooses' => $chooses,
    ];
  }

}
