<?php

namespace Drupal\first_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'banner' Block.
 *
 * @Block(
 *   id = "banner_block",
 *   admin_label = @Translation("Banner Block"),
 *   category = @Translation("Banner Block"),
 * )
 */
class BannerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $header = 'Hello Everyone, this is Miha';
    $subHeader = 'Never stop dreaming, never stop believing, never give up, never stop trying, and never stop learning.';
    $list_items = [
      [
        "navWord" => "Home",
        "navTarget"=>"#home"
      ],
      [
        "navWord" => "About",
        "navTarget" => "#about",
      ],
      [
        "navWord" => "Portfolio",
        "navTarget" => "#port-folio",
      ],
      [
        "navWord" => "Contact",
        "navTarget" => "#contact",
      ]
    ];

   return [
      '#theme' => 'banner-block',
      '#header' => $header,
      '#subHeader' => $subHeader,
      '#data' => $list_items
    ];
  }

}

?>