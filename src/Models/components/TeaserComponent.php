<?php
namespace siemendev\MyFrontendBundle\Models\components;

use siemendev\ForskelBundle\Models\AbstractModel;

class TeaserComponent extends AbstractModel
{
    /** @var string */
    public $headline;

    /** @var string */
    public $text;

    /** @var string */
    public $link;
}