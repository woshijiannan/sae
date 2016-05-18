<?php

/* homepage/index.html.twig */
class __TwigTemplate_e56896b72f4b6cca1e55f1addb626a96c619cddfc7bdcda1368e8f47aedafb96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb2467bf02ea0c7de60ef9b4fae95e920fb4d8cff60711d992d86ebb1e6abcb = $this->env->getExtension("native_profiler");
        $__internal_3bb2467bf02ea0c7de60ef9b4fae95e920fb4d8cff60711d992d86ebb1e6abcb->enter($__internal_3bb2467bf02ea0c7de60ef9b4fae95e920fb4d8cff60711d992d86ebb1e6abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb2467bf02ea0c7de60ef9b4fae95e920fb4d8cff60711d992d86ebb1e6abcb->leave($__internal_3bb2467bf02ea0c7de60ef9b4fae95e920fb4d8cff60711d992d86ebb1e6abcb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_132f30a2a3c86bd35f6992ca0733ccbf500286bd512e12d7720e33ad8358e175 = $this->env->getExtension("native_profiler");
        $__internal_132f30a2a3c86bd35f6992ca0733ccbf500286bd512e12d7720e33ad8358e175->enter($__internal_132f30a2a3c86bd35f6992ca0733ccbf500286bd512e12d7720e33ad8358e175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    开奖啦！
";
        
        $__internal_132f30a2a3c86bd35f6992ca0733ccbf500286bd512e12d7720e33ad8358e175->leave($__internal_132f30a2a3c86bd35f6992ca0733ccbf500286bd512e12d7720e33ad8358e175_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ce8582dc4ca4d3f076523d00ad88a11d5d686bd2ce68b6f9d658d1bbb1b3d40 = $this->env->getExtension("native_profiler");
        $__internal_0ce8582dc4ca4d3f076523d00ad88a11d5d686bd2ce68b6f9d658d1bbb1b3d40->enter($__internal_0ce8582dc4ca4d3f076523d00ad88a11d5d686bd2ce68b6f9d658d1bbb1b3d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("redandblue");
        echo "\">双色球</a>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("bigfun");
        echo "\">大乐透</a>
";
        
        $__internal_0ce8582dc4ca4d3f076523d00ad88a11d5d686bd2ce68b6f9d658d1bbb1b3d40->leave($__internal_0ce8582dc4ca4d3f076523d00ad88a11d5d686bd2ce68b6f9d658d1bbb1b3d40_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     开奖啦！*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <a href="{{ path('redandblue') }}">双色球</a>*/
/*     <a href="{{ path('bigfun') }}">大乐透</a>*/
/* {% endblock %}*/
