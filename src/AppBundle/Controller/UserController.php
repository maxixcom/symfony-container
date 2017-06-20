<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;

/**
 * Class UserController
 * @package AppBundle\Controller
 *
 * @RouteResource("user")
 */
class UserController extends FOSRestController implements ClassResourceInterface
{
    public function getAction($id) {
        // Container is NULL here:
        var_dump($this->container); // display NULL
        exit;

        // next code gives error because container is null:

//        return $this->getDoctrine()
//            ->getRepository('AppBundle:User')
//            ->find($id);
    } // "get_user"      [GET] /users/{slug}
}