<?php

namespace Drupal\as_choose\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the as_choose module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "as_choose DefaultController's controller functionality",
      'description' => 'Test Unit for module as_choose and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests as_choose functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module as_choose.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
