<?php
/**
 * Created by PhpStorm.
 * User: ALi
 * Date: 27/11/2017
 * Time: 22:13
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class ArticleController extends Controller
{
    /**
     * @Get(
     *     path = "/articles/{id}",
     *     name = "app_article_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function showAction()
    {
        $article = new Article();
        $article->setTitle('Article 1');
        $article->setContent('Le contenu du mon article');

        return $article;
    }
}
