<?php
/**
 * @file
 * Contains \Drupal\calculator\Controller\Calculator.
 * ^ Пишется по следующему типу:
 *  - \Drupal - это указывает что данный файл относится к ядру Drupal, ведь
 *    теперь там еще есть Symfony.
 *  - calculator - название модуля.
 *  - Controller - тип файла. Папка src опускается всегда.
 *  - Calculator - название нашего класса.
 */

/**
 * Пространство имен нашего контроллера. Обратите внимание что оно схоже с тем
 * что описано выше, только опускается название нашего класса.
 */
namespace Drupal\calculator\Controller;

/**
 * Используем друпальный класс ControllerBase. Мы будем от него наследоваться,
 * а он за нас сделает все обязательные вещи которые присущи всем контроллерам.
 */
use Drupal\Core\Controller\ControllerBase;

/**
 * Объявляем наш класс-контроллер.
 */
class CalculatorController extends ControllerBase {

    /**
     * {@inheritdoc}
     *
     * В Drupal 8 очень многое строится на renderable arrays и при отдаче
     * из данной функции содержимого для страницы, мы также должны вернуть
     * массив который спокойно пройдет через drupal_render().
     */
    public function calc() {
        $output = array();

        $output['#title'] = 'Calculator Page';

        $output['#markup'] = 'Calculator Functions...';


        return $output;



    }

}