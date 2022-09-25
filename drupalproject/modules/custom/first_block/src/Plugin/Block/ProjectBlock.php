<?php

namespace Drupal\first_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'project' Block.
 *
 * @Block(
 *   id = "project_block",
 *   admin_label = @Translation("Project Block"),
 *   category = @Translation("Project Block"),
 * )
 */
class ProjectBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $projectItems = [
        [
            "project_image" => "/drupalproject/sites/default/files/images/Movie_Api.png",
            "project_title" => "Movie Search Website with TMDB API",
            "skill_stack" => "REACTJS, FRONT END, API",
            "id" => "#movie_api",
            "alt" => "Movie_API_Website"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/Restaurant_Website.png",
            "project_title" => "Simple One Page Restaurant Website",
            "skill_stack" => "REACTJS, FRONT END, JQUERY",
            "id" => "#restaurant_website",
            "alt" => "Restaurant_Website"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/E-commerce.png",
            "project_title" => "E-commerce Website with Firebase login authentication",
            "skill_stack" => "REACTJS, FRONT END, E-COMMERCE, FIREBASE",
            "id" => "#e-commerce",
            "alt" => "Ecommerce_Website"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/form.png",
            "project_title" => "Online Registration Form",
            "skill_stack" => "WEB DESIGN",
            "id" => "#form",
            "alt" => "Online_Registration_Form"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/gallery.png",
            "project_title" => "Interactive Photo Gallery",
            "skill_stack" => "FRONT END, JQUERY PLUGIN",
            "id" => "#gallery",
            "alt" => "Interactive_Photo_Gallery"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/api.png",
            "project_title" => "API of Employee Directory",
            "skill_stack" => "FRONT END, API",
            "id" => "#api",
            "alt" => "API_Of_Employee_Directory"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/quotes.png",
            "project_title" => "Random Quote Generator",
            "skill_stack" => "PHP",
            "id" => "#quote",
            "alt" => "Random_Quote_Generator"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/session.png",
            "project_title" => "Math Quiz using with Session",
            "skill_stack" => "PHP, SESSION",
            "id" => "#quiz",
            "alt" => "Math_Quiz"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/sql.png",
            "project_title" => "Task List Interact With Database",
            "skill_stack" => "PHP, SQL",
            "id" => "#sql",
            "alt" => "Task_List_Database"
        ],
        [
            "project_image" => "/drupalproject/sites/default/files/images/phrase.png",
            "project_title" => "OOP Concept Phrase Game",
            "skill_stack" => "PHP, GAME",
            "id" => "#phrase",
            "alt" => "OOP_Concept_Phrase_Game"
        ]
    ];

    $modalItems = [
        [
            "id" => "movie_api",
            "header" => "Movie Search Website with TMDB API",
            "words" => "The Movie Search Website integrates with TMDB API. The key features of the project are searching for the favourite movie and adding to the favourite list. You can also remove from the favourite list.",
            "skills" => "ReactJs, Front-End, TMDB API"
        ],
        [
            "id" => "restaurant_website",
            "header" => "Simple One Page Restaurant Website",
            "words" => "Simple One Page Restaurant Website mainly shows the Korean cuisine. The key features of the project is a slide show and menu filter.",
            "skills" => "ReactJs, Front-End, jQuery"
        ],
        [
            "id" => "e-commerce",
            "header" => "E-commerce Website with Firebase login authentication",
            "words" => "E-commerce Website along with Firebase login authentication, the key features of the project is adding the item to the cart and purchase the item. The checkout function was using the PayPal checkout. And you can Login your account at the website.",
            "skills" => "ReactJs, Front-End, E-Commerce, Firebase"
        ],
        [
            "id" => "form",
            "header" => "Online Registration Form",
            "words" => "The project is from my online course project. The project is building the Online Registration Form, the main feature is implement the CSS Flexbox.",
            "skills" => "HTML, CSS, Web Design"
        ],
        [
            "id" => "gallery",
            "header" => "Interactive Photo Gallery",
            "words" => "The project is from my online course project. The main features of the project are search bar with images gallery. You can search relative key words, then the relative images will appear below the search bar.",
            "skills" => "HTML, CSS, jQuery Plugin, Front End"
        ],
        [
            "id" => "api",
            "header" => "API of Employee Directory",
            "words" => "The project is from my online course project. The features of the project are fetching the API and presents the API data information through design layout.",
            "skills" => "HTML, CSS, javaScript, Front End"
        ],
        [
            "id" => "quote",
            "header" => "Random Quote Generator",
            "words" => "The project is from my online course project. The features of the project are when you click the button on the screen, it will generate the different kinds of motivational quotes.",
            "skills" => "PHP"
        ],
        [
            "id" => "quiz",
            "header" => "Math Quiz using with Session",
            "words" => "The project is from my online course project. The features of the project are choosing the right answer from the following Math quiz. The project is mainly focused on PHP working with the Session.",
            "skills" => "PHP, Session"
        ],
        [
            "id" => "sql",
            "header" => "Task List With Database",
            "words" => "The project is from my online course project. The features of the project are adding the task to your list. The concept of project is using the CRUD. You can add, update and delete from the task list.",
            "skills" => "PHP, SQL"
        ],
        [
            "id" => "phrase",
            "header" => "OOP Concept Phrase Game",
            "words" => "The project is from my online course project. The features of the project are base on empty blank and guessing the correct vocabulary, there are 5 lives, if you guess wrong, it will decrease one point of your life. If you guess correct, you successfully win the game.",
            "skills" => "PHP, Game"
        ]
    ];

   return [
      '#theme' => 'project-block',
      '#projectItems' => $projectItems,
      '#modalItems' => $modalItems,
    ];
  }

}

?>