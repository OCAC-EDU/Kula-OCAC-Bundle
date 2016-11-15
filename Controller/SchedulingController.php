<?php

namespace OCACBundle\Controller;

use Kula\Core\Bundle\FrameworkBundle\Controller\APIController;

class SchedulingController extends APIController {
  
  public function addClassAction($student_id, $section_id) {
    return $this->symfonyForward('KulaHEdSchedulingBundle:APIv1Schedule:addClass', array('student_id' => $student_id, 'section_id' => $section_id));
  }  

  public function removeClassAction($student_id, $class_id) {
    return $this->symfonyForward('KulaHEdSchedulingBundle:APIv1Schedule:removeClass', array('student_id' => $student_id, 'class_id' => $class_id));
  }  

  public function getClassesAction($student_id, $org = null, $term = null) {
     return $this->symfonyForward('KulaHEdSchedulingBundle:APIv1Schedule:getClasses', array('student_id' => $student_id, 'org' => $org, 'term' => $term));
  }

  public function getPendingClassesAction() {
  	return $this->symfonyForward('KulaHEdSchedulingBundle:APIv1Schedule:getPendingClasses');
  }

}
