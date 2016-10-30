<?php

namespace OCACBundle\Controller;

use Kula\Core\Bundle\FrameworkBundle\Controller\APIController;

class CourseCatalogController extends APIController {
  
  public function indexAction($org, $term) {
    return $this->symfonyForward('KulaHEdSchedulingBundle:APIv1Course:courses', array('org' => $org, 'term' => $term));
  }  

  public function courseAction($org, $term, $section_id) {
    return $this->symfonyForward('KulaHEdSchedulingBundle:APIv1Course:course', array('org' => $org, 'term' => $term, 'section_id' => $section_id));
  }  
}
