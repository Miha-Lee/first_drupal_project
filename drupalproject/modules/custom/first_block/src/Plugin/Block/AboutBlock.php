<?php

namespace Drupal\first_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'about' Block.
 *
 * @Block(
 *   id = "about_block",
 *   admin_label = @Translation("About Block"),
 *   category = @Translation("About Block"),
 * )
 */
class AboutBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $title = 'PERSONAL DETAIL';
    $words = 'Hi everyone, this is Miha. I am learning Code from various websites and resources, such as Udemy, Treehouse, Codecademy and so on. For the Front-End Side, I normally use HTML, CSS, JavaScript, jQuery, Bootstrap and ReactJs. Currently, still making progress with ReactJs. For the Back-end side, I am using PHP. There are still a lot of things I need to learn from scratch, so I am keep making progress and upgrading myself everyday. If you can give me the opportunity, I will be very pleased!';

   return [
      '#theme' => 'about-block',
      '#title' => $title,
      '#words' => $words,
    ];
  }

}

?>