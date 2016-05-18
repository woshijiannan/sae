<?php

/* base.html.twig */
class __TwigTemplate_4d6edf1be3e90abe435e578eb7542706f02e14c21660e0a91a3c1b2ac1f93114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eba736ec857f95cc33073d2124f496d54fe8a740bc8a31e9ed6735c8e539f381 = $this->env->getExtension("native_profiler");
        $__internal_eba736ec857f95cc33073d2124f496d54fe8a740bc8a31e9ed6735c8e539f381->enter($__internal_eba736ec857f95cc33073d2124f496d54fe8a740bc8a31e9ed6735c8e539f381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            p{
                font-size:100px;
            }
        </style>
    </head>
    <body>
    <p>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </p>
    </body>
</html>
";
        
        $__internal_eba736ec857f95cc33073d2124f496d54fe8a740bc8a31e9ed6735c8e539f381->leave($__internal_eba736ec857f95cc33073d2124f496d54fe8a740bc8a31e9ed6735c8e539f381_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_548721cbd7c669b26122c909598469c7c30d36e04ddc3a05ba009e9f073de973 = $this->env->getExtension("native_profiler");
        $__internal_548721cbd7c669b26122c909598469c7c30d36e04ddc3a05ba009e9f073de973->enter($__internal_548721cbd7c669b26122c909598469c7c30d36e04ddc3a05ba009e9f073de973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_548721cbd7c669b26122c909598469c7c30d36e04ddc3a05ba009e9f073de973->leave($__internal_548721cbd7c669b26122c909598469c7c30d36e04ddc3a05ba009e9f073de973_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ca38d4e1d81a95f59375bfdfd8246399e6b82313022dd046a6bce0632c1356d = $this->env->getExtension("native_profiler");
        $__internal_6ca38d4e1d81a95f59375bfdfd8246399e6b82313022dd046a6bce0632c1356d->enter($__internal_6ca38d4e1d81a95f59375bfdfd8246399e6b82313022dd046a6bce0632c1356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ca38d4e1d81a95f59375bfdfd8246399e6b82313022dd046a6bce0632c1356d->leave($__internal_6ca38d4e1d81a95f59375bfdfd8246399e6b82313022dd046a6bce0632c1356d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2020e097771b6a51696721016a2e86e07d460a8a780515dbee650a69ab0c94ce = $this->env->getExtension("native_profiler");
        $__internal_2020e097771b6a51696721016a2e86e07d460a8a780515dbee650a69ab0c94ce->enter($__internal_2020e097771b6a51696721016a2e86e07d460a8a780515dbee650a69ab0c94ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2020e097771b6a51696721016a2e86e07d460a8a780515dbee650a69ab0c94ce->leave($__internal_2020e097771b6a51696721016a2e86e07d460a8a780515dbee650a69ab0c94ce_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da1d6a42599a1f7aabee584540a2ad71e8e51f7b0169670fb0a4bfcd0581fe43 = $this->env->getExtension("native_profiler");
        $__internal_da1d6a42599a1f7aabee584540a2ad71e8e51f7b0169670fb0a4bfcd0581fe43->enter($__internal_da1d6a42599a1f7aabee584540a2ad71e8e51f7b0169670fb0a4bfcd0581fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da1d6a42599a1f7aabee584540a2ad71e8e51f7b0169670fb0a4bfcd0581fe43->leave($__internal_da1d6a42599a1f7aabee584540a2ad71e8e51f7b0169670fb0a4bfcd0581fe43_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  89 => 16,  78 => 6,  66 => 5,  56 => 18,  53 => 17,  51 => 16,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style type="text/css">*/
/*             p{*/
/*                 font-size:100px;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*     <p>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </p>*/
/*     </body>*/
/* </html>*/
/* */
