<?php

namespace App;

/**
 * Class Page
 * @package App
 */
class Page
{
    /**
     * @var string
     */
    private $target;
    /**
     * @var array
     */
    private $params;
    /**
     * @var
     */
    private $title;
    /**
     * @var
     */
    private $description;
    /**
     * @var
     */
    private $content;
    /**
     * @var string
     */
    private $js = '';

    /**
     * @var string
     */
    private $template = "default.php";

    /**
     * Page constructor.
     * @param string $target
     * @param array $params
     */
    public function __construct(string $target, array $params)
    {
        $this->target = $target;
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     *
     */
    public function getContent()
    {
        echo $this->content ?? '';
    }

    /**
     * @param string $js
     */
    public function setJs(string $js)
    {
        $this->js = $js;
    }

    /**
     *
     */
    public function getJs()
    {
        echo $this->js;
    }

    /**
     * @param string $template
     * @return $this
     */
    public function setTemplate(string $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param array $array
     */
    public static function Debug(array $array)
    {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }

}