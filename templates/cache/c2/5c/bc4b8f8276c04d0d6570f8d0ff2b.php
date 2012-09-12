<?php

/* example.html */
class __TwigTemplate_c25cbc4b8f8276c04d0d6570f8d0ff2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"hero-unit\">
\t
  <h1>Oh, so you think you can route?</h1>
  
  <p>Gus hopes so! With a super simple configuration and the extensible templating engine, starting
  \tyour web app has never been easier.</p>
  
  <p>
    <a href=\"https://github.com/maxatbrs/gus\" target=\"_blank\" class=\"btn btn-primary btn-large\">
      Learn More on GitHub!
    </a>
  </p>
  
</div>";
    }

    public function getTemplateName()
    {
        return "example.html";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
