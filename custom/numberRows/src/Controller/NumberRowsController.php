<?php
namespace Drupal\numberRows\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

class NumberRowsController extends ControllerBase {

    public function numberRows($numero) {
      $header = [
        'col1' => t('Has creat ' .$numero. ' files'),
      ];
      $rows=array();
      for($i=1;$i<=(int)$numero;$i++) {
        array_push($rows,array((string)$i));
      }

      return [
        '#type' => 'table',
        '#header' => $header,
        '#rows' => $rows,
      ];
    }

}
