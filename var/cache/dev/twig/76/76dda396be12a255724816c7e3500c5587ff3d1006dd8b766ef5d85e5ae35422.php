<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fb8bb801429b29ccdbc0e4b9f47dee584c89dad982d5aabb25ef52f041cc29d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65aaaa3afeeea1fd60e216e84c9a045943b6edea29dede206c3447e83cd0ba74 = $this->env->getExtension("native_profiler");
        $__internal_65aaaa3afeeea1fd60e216e84c9a045943b6edea29dede206c3447e83cd0ba74->enter($__internal_65aaaa3afeeea1fd60e216e84c9a045943b6edea29dede206c3447e83cd0ba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65aaaa3afeeea1fd60e216e84c9a045943b6edea29dede206c3447e83cd0ba74->leave($__internal_65aaaa3afeeea1fd60e216e84c9a045943b6edea29dede206c3447e83cd0ba74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bbdb9233ac55a4ead58ad593aba095e228110f2e0133ac2205948a681925e6a = $this->env->getExtension("native_profiler");
        $__internal_0bbdb9233ac55a4ead58ad593aba095e228110f2e0133ac2205948a681925e6a->enter($__internal_0bbdb9233ac55a4ead58ad593aba095e228110f2e0133ac2205948a681925e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0bbdb9233ac55a4ead58ad593aba095e228110f2e0133ac2205948a681925e6a->leave($__internal_0bbdb9233ac55a4ead58ad593aba095e228110f2e0133ac2205948a681925e6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7494b320ddb8994256bd4f3ac2cc445a730874ee3f6a87b36834984429c61600 = $this->env->getExtension("native_profiler");
        $__internal_7494b320ddb8994256bd4f3ac2cc445a730874ee3f6a87b36834984429c61600->enter($__internal_7494b320ddb8994256bd4f3ac2cc445a730874ee3f6a87b36834984429c61600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7494b320ddb8994256bd4f3ac2cc445a730874ee3f6a87b36834984429c61600->leave($__internal_7494b320ddb8994256bd4f3ac2cc445a730874ee3f6a87b36834984429c61600_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20930339afdf13d93e27c5a2741774598f9f82353675e0789087031e4f9549ef = $this->env->getExtension("native_profiler");
        $__internal_20930339afdf13d93e27c5a2741774598f9f82353675e0789087031e4f9549ef->enter($__internal_20930339afdf13d93e27c5a2741774598f9f82353675e0789087031e4f9549ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_20930339afdf13d93e27c5a2741774598f9f82353675e0789087031e4f9549ef->leave($__internal_20930339afdf13d93e27c5a2741774598f9f82353675e0789087031e4f9549ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
