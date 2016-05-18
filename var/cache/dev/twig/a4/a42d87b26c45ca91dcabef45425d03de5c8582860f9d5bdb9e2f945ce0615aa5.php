<?php

/* lotterypage/redandblue.html.twig */
class __TwigTemplate_04378a3736fd3b23b0500e5863fb5131797c2264a3e9010042bff5db38284611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lotterypage/redandblue.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36ec5f98d5ceca0679a31fe69b98bfd7b8349894adebadcc18c1597fb26908d1 = $this->env->getExtension("native_profiler");
        $__internal_36ec5f98d5ceca0679a31fe69b98bfd7b8349894adebadcc18c1597fb26908d1->enter($__internal_36ec5f98d5ceca0679a31fe69b98bfd7b8349894adebadcc18c1597fb26908d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lotterypage/redandblue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ec5f98d5ceca0679a31fe69b98bfd7b8349894adebadcc18c1597fb26908d1->leave($__internal_36ec5f98d5ceca0679a31fe69b98bfd7b8349894adebadcc18c1597fb26908d1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bcbeb566917e76d64bd4a6057c63ec12142a3b3534248bd6a94c82e719d8a1f = $this->env->getExtension("native_profiler");
        $__internal_6bcbeb566917e76d64bd4a6057c63ec12142a3b3534248bd6a94c82e719d8a1f->enter($__internal_6bcbeb566917e76d64bd4a6057c63ec12142a3b3534248bd6a94c82e719d8a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["message1"]) ? $context["message1"] : $this->getContext($context, "message1")), "html", null, true);
        echo "</br>
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message2"]) ? $context["message2"] : $this->getContext($context, "message2")), "html", null, true);
        echo "</br>
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["message3"]) ? $context["message3"] : $this->getContext($context, "message3")), "html", null, true);
        echo "</br>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">返回首页</a></br>

";
        
        $__internal_6bcbeb566917e76d64bd4a6057c63ec12142a3b3534248bd6a94c82e719d8a1f->leave($__internal_6bcbeb566917e76d64bd4a6057c63ec12142a3b3534248bd6a94c82e719d8a1f_prof);

    }

    public function getTemplateName()
    {
        return "lotterypage/redandblue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {{ message1 }}</br>*/
/*     {{ message2 }}</br>*/
/*     {{ message3 }}</br>*/
/*     <a href="{{ path('homepage') }}">返回首页</a></br>*/
/* */
/* {% endblock %}*/
