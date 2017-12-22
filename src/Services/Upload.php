<?php
/**
 * Created by PhpStorm.
 * User: nduvi
 * Date: 22/12/2017
 * Time: 15:00
 */

namespace App\Services;

use App\Entity\Image;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Upload
{
    private $container;

    public function __construct(ContainerInterface $Container) {
        $this->container = $Container;
    }

    public function uploadImage(Image $image) {
        $file = $image->getImage();
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move(
            $this->container->getParameter('image_directory'),
            $fileName
        );
        $image->setImage($fileName);
    }
}