<?php
namespace siemendev\MyFrontendBundle\Models\components;

use siemendev\ForskelBundle\Models\AbstractModel;

class ImageComponent extends AbstractModel
{
    /** @var string */
    public $source;

    /** @var string */
    public $alt;
}