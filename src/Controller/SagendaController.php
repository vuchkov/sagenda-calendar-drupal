<?php

namespace Drupal\sagenda\Controller;


class SagendaController {

  public function displayCalendar() {
    return array('#title' => 'Sagenda', '#markup' => 'This is some content');
  }
}
