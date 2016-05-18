<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8aef3e734caac9c321dd99118f6034264765e4705e140a8f24277847954dd48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d0ddebc3eee3e099f8de770d7f3404e6b6b77ba1869018b93cc0d044b52a79a1 = $this->env->getExtension("native_profiler");
        $__internal_d0ddebc3eee3e099f8de770d7f3404e6b6b77ba1869018b93cc0d044b52a79a1->enter($__internal_d0ddebc3eee3e099f8de770d7f3404e6b6b77ba1869018b93cc0d044b52a79a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ddebc3eee3e099f8de770d7f3404e6b6b77ba1869018b93cc0d044b52a79a1->leave($__internal_d0ddebc3eee3e099f8de770d7f3404e6b6b77ba1869018b93cc0d044b52a79a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb26c3d07af7f98f2980c8145d18c7af5cfd2a1cd417f766f32ab4eabdf4fae4 = $this->env->getExtension("native_profiler");
        $__internal_eb26c3d07af7f98f2980c8145d18c7af5cfd2a1cd417f766f32ab4eabdf4fae4->enter($__internal_eb26c3d07af7f98f2980c8145d18c7af5cfd2a1cd417f766f32ab4eabdf4fae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb26c3d07af7f98f2980c8145d18c7af5cfd2a1cd417f766f32ab4eabdf4fae4->leave($__internal_eb26c3d07af7f98f2980c8145d18c7af5cfd2a1cd417f766f32ab4eabdf4fae4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5f6962fc17c5ab61550efdcc959efcd2b8944d1422339ba4c1f4a10ecf820f0 = $this->env->getExtension("native_profiler");
        $__internal_c5f6962fc17c5ab61550efdcc959efcd2b8944d1422339ba4c1f4a10ecf820f0->enter($__internal_c5f6962fc17c5ab61550efdcc959efcd2b8944d1422339ba4c1f4a10ecf820f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5f6962fc17c5ab61550efdcc959efcd2b8944d1422339ba4c1f4a10ecf820f0->leave($__internal_c5f6962fc17c5ab61550efdcc959efcd2b8944d1422339ba4c1f4a10ecf820f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dea3051625060a6e63bd7dc14bde55a18363b29263cfb44ec962bdcd5553171 = $this->env->getExtension("native_profiler");
        $__internal_5dea3051625060a6e63bd7dc14bde55a18363b29263cfb44ec962bdcd5553171->enter($__internal_5dea3051625060a6e63bd7dc14bde55a18363b29263cfb44ec962bdcd5553171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dea3051625060a6e63bd7dc14bde55a18363b29263cfb44ec962bdcd5553171->leave($__internal_5dea3051625060a6e63bd7dc14bde55a18363b29263cfb44ec962bdcd5553171_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
