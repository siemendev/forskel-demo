<?php
namespace siemendev\MyFrontendBundle\Models\sections;

use siemendev\ForskelBundle\Models\AbstractModel;
use siemendev\ForskelBundle\Models\ModelInterface;

class HerospaceSection extends AbstractModel
{
    /** @var string */
    public $headline;

    /** @var string */
    public $text;

    /** @var ModelInterface */
    public $image;
}