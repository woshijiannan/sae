<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df157447378b9eea99a061b6bd951b0ae26ff31c553c0f578dfe68c73e2c9f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_822658dc7f4cc44a1d6fd8159a623a2e427afb35e923b64f94562f32586ce1c2 = $this->env->getExtension("native_profiler");
        $__internal_822658dc7f4cc44a1d6fd8159a623a2e427afb35e923b64f94562f32586ce1c2->enter($__internal_822658dc7f4cc44a1d6fd8159a623a2e427afb35e923b64f94562f32586ce1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822658dc7f4cc44a1d6fd8159a623a2e427afb35e923b64f94562f32586ce1c2->leave($__internal_822658dc7f4cc44a1d6fd8159a623a2e427afb35e923b64f94562f32586ce1c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d92f48ce96b2d23c43735f6917a9949b88765e4075c33b693727658812094db = $this->env->getExtension("native_profiler");
        $__internal_9d92f48ce96b2d23c43735f6917a9949b88765e4075c33b693727658812094db->enter($__internal_9d92f48ce96b2d23c43735f6917a9949b88765e4075c33b693727658812094db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d92f48ce96b2d23c43735f6917a9949b88765e4075c33b693727658812094db->leave($__internal_9d92f48ce96b2d23c43735f6917a9949b88765e4075c33b693727658812094db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a636ba2b4bd33e038b43e6a94ef937ef7937ccb326509438cb3e8833248686e = $this->env->getExtension("native_profiler");
        $__internal_7a636ba2b4bd33e038b43e6a94ef937ef7937ccb326509438cb3e8833248686e->enter($__internal_7a636ba2b4bd33e038b43e6a94ef937ef7937ccb326509438cb3e8833248686e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a636ba2b4bd33e038b43e6a94ef937ef7937ccb326509438cb3e8833248686e->leave($__internal_7a636ba2b4bd33e038b43e6a94ef937ef7937ccb326509438cb3e8833248686e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_251187a94e7664906f4c4268554a98ccf0d406ca4b085c218e81a38dc9c1604e = $this->env->getExtension("native_profiler");
        $__internal_251187a94e7664906f4c4268554a98ccf0d406ca4b085c218e81a38dc9c1604e->enter($__internal_251187a94e7664906f4c4268554a98ccf0d406ca4b085c218e81a38dc9c1604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_251187a94e7664906f4c4268554a98ccf0d406ca4b085c218e81a38dc9c1604e->leave($__internal_251187a94e7664906f4c4268554a98ccf0d406ca4b085c218e81a38dc9c1604e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
