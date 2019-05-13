<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Beacon;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;


class BeaconController extends FOSRestController
{

    /**
     * List of Articles
     *
     * @REST\Get("/api/beacons", name="api_get_beacons")
     * @REST\View()
     *
     * @return mixed
     */
    public function getBeaconsAction()
    {

        $articles = $this->getDoctrine()->getRepository("AppBundle:Beacon")->findBy(['enabled' => true]);

        $view = $this->view($articles, 200)->setFormat('json');
        return $this->handleView($view);

    }

    /**
     * List of Articles
     *
     * @REST\Get("/api/beacons/{id}", name="api_get_beacon")
     * @REST\View()
     *
     * @param Beacon $beacon
     * @return mixed
     */
    public function getArticleDetailsAction(Beacon $beacon)
    {

        $view = $this->view($beacon, 200)->setFormat('json');
        return $this->handleView($view);

    }
}
