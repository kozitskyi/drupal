<?php
/**
 * @file
 * Contains \Drupal\calculator\Controller\Calculator.
**/

namespace Drupal\calculator\Controller;


use Drupal\Core\Controller\ControllerBase;


class MainController extends ControllerBase {

    /**
     * {@inheritdoc}
     */

    public function request() {
        $output = array();

        $output['#title'] = 'Calculator Page';

        $output['#markup'] = 'Calculator Functions...';


        return $output;



    }

}