<?php

/* home.html */
class __TwigTemplate_4dca6a6e6e9eab0134957705070928b6 extends Twig_Template
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
  <h1>Hello world!</h1>
  
  <p>Prototyping web apps sucks <span class=\"pink\">&amp;</span> needed to roll out web apps <span class=\"pink\">like a boss.</span></p>
  
  <p>
  \t<img title=\"My Dog Gus\" src=\"";
        // line 8
        if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
        echo twig_escape_filter($this->env, $_img_, "html", null, true);
        echo "/gussy.jpg\" /> 
  \t<span class=\"pink\">&lt; Inspiration</span>
  </p>
  
  <p>
    <a href=\"https://github.com/maxatbrs/gus\" target=\"_blank\" class=\"btn btn-primary\">
      Learn More @ GitHub!
    </a>
  </p>
  
</div>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  17 => 1,);
    }
}
