<?php

/* lotterypage/bigfun.html.twig */
class __TwigTemplate_cefd0069a4b7ca7c1a3324a8158f54da0d7ecf5c4b24af3560f07e0caac55c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lotterypage/bigfun.html.twig", 1);
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
        $__internal_f2546c24000b7255472bee218ca8097b5a77450d23de077ccba8b3f4b05dddf3 = $this->env->getExtension("native_profiler");
        $__internal_f2546c24000b7255472bee218ca8097b5a77450d23de077ccba8b3f4b05dddf3->enter($__internal_f2546c24000b7255472bee218ca8097b5a77450d23de077ccba8b3f4b05dddf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lotterypage/bigfun.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2546c24000b7255472bee218ca8097b5a77450d23de077ccba8b3f4b05dddf3->leave($__internal_f2546c24000b7255472bee218ca8097b5a77450d23de077ccba8b3f4b05dddf3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_891d168dd1ffa664149bf5d5cf5bb115d41c0bc332996ce95a0c601a12f7353a = $this->env->getExtension("native_profiler");
        $__internal_891d168dd1ffa664149bf5d5cf5bb115d41c0bc332996ce95a0c601a12f7353a->enter($__internal_891d168dd1ffa664149bf5d5cf5bb115d41c0bc332996ce95a0c601a12f7353a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_891d168dd1ffa664149bf5d5cf5bb115d41c0bc332996ce95a0c601a12f7353a->leave($__internal_891d168dd1ffa664149bf5d5cf5bb115d41c0bc332996ce95a0c601a12f7353a_prof);

    }

    public function getTemplateName()
    {
        return "lotterypage/bigfun.html.twig";
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
/* {% endblock %}*/
