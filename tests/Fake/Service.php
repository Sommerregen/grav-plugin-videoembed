<?php


namespace Grav\Plugin\VideoEmbed\Tests\Fake;


use Grav\Plugin\VideoEmbed\ServiceInterface;

class Service implements ServiceInterface
{

    /**
     * Process html
     * @param string $html
     * @return string
     */
    public function processHtml($html)
    {
        // TODO: Implement processHtml() method.
    }

    /**
     * Get regular expression, which take service url
     * @return string
     */
    public function getRegExpression()
    {
        // TODO: Implement getRegExpression() method.
    }

    /**
     * Get embed node for replace link
     * @param $matches array
     * @return \DOMNode
     */
    public function getEmbedNode(array $matches)
    {
        // TODO: Implement getEmbedNode() method.
    }
}
