<?php
namespace siemendev\MyFrontendBundle\Models\pages;

use siemendev\ForskelBundle\Models\AbstractModel;
use siemendev\ForskelBundle\Models\ModelInterface;

class ContentPage extends AbstractModel
{
    /** @var string */
    public $title;

    /** @var string */
    public $headline;

    /** @var ModelInterface[] */
    public $contents;
}