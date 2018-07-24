<?php
/**
 * @file
 * Contains \Drupal\calculator\Controller\Calculator.
 */


namespace Drupal\calculator\Controller;


use Drupal\Core\Controller\ControllerBase;

/**
 * Объявляем наш класс-контроллер.
 */
class CalculatorController extends ControllerBase {

    /**
     * {@inheritdoc}
     */
    public function calc() {
        $output = array();

        $output['#title'] = 'Calculator Page';

        $output['#markup'] = 'Calculator Functions...';


        return $output;



    }

}