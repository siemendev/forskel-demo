<?php
namespace siemendev\MyFrontendBundle\Models\sections;

use siemendev\ForskelBundle\Models\AbstractModel;
use siemendev\ForskelBundle\Models\ModelInterface;

class TeaserListSection extends AbstractModel
{
    /** @var int */
    public $columns;

    /** @var ModelInterface */
    public $teasers;
}