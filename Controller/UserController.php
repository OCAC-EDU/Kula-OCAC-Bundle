<?php

namespace OCACBundle\Controller;

use Kula\Core\Bundle\FrameworkBundle\Controller\APIController;

class UserController extends APIController { 

  public function getChildrenAction() {
     return $this->symfonyForward('KulaK12StudentBundle:APIv1Student:relatedChildren');
  }

  public function addChildAction() {
  	return $this->symfonyForward('KulaK12StudentBundle:APIv1Student:createChild');
  }

}
