This is a demo
============

This repository is a demo for [Forskel](https://github.com/siemendev/forskel). The following steps help you to get into *Forskel*.

## I just want to see it working, no long configuration!
(tbd)
1. Open up a symfony project (or [create a new one](https://symfony.com/doc/current/setup.html))
2. Install the *Forskel* demo: ```$ composer require siemendev/forskel-demo```
3. Try out generating the demo project in a controller like this:
```php
<?php
# /Controller/IndexController.php
namespace App\Controller;

use siemendev\ForskelBundle\Renderer\TwigRenderer;
use siemendev\MyFrontendBundle\Models\components\TeaserComponent;
use siemendev\MyFrontendBundle\Models\pages\ContentPage;
use siemendev\MyFrontendBundle\Models\sections\HerospaceSection;
use siemendev\MyFrontendBundle\Models\sections\TeaserListSection;
use siemendev\MyFrontendBundle\Models\components\ImageComponent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(TwigRenderer $forskel)
    {
        $image = new ImageComponent();
        $image->source = 'https://www.visitdenmark.com/sites/default/files/VDK_Website_images/Tourist_content/Beaches_coast/lokken_beach_denmark.jpg';
        $image->alt = 'A nice danish beach.';

        $hero = new HerospaceSection();
        $hero->headline = 'My herospace';
        $hero->text = '<p>This is a herospace. Big shops use them to tease new products or upcoming sales.</p>';
        $hero->image = $image;

        $teaser = new TeaserComponent();
        $teaser->headline = 'My teaser';
        $teaser->text = '<p>Some informational text about something you would click on.</p>';
        $teaser->link = 'https://google.com';

        $teaserList = new TeaserListSection();
        $teaserList->columns = 3;
        $teaserList->teasers = [$teaser, $teaser, $teaser];

        $page = new ContentPage();
        $page->headline = 'My fancy web page';
        $page->contents = [$hero, $teaserList];

        return $forskel->render($page);
    }
}

```

## I want the deep-dive, tell me how to install the demo completely!
(tbd)
