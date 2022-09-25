<?php

namespace Drupal\first_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'contact' Block.
 *
 * @Block(
 *   id = "contact_block",
 *   admin_label = @Translation("Contact Block"),
 *   category = @Translation("Contact Block"),
 * )
 */
class ContactBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $email = "futurescope32676@gmail.com";
    $address = "Hong Kong";
    $phone = "+852 66081360";

   return [
      '#theme' => 'contact-block',
      '#email' => $email,
      '#address' => $address,
      '#phone' => $phone
    ];
  }

}

?>