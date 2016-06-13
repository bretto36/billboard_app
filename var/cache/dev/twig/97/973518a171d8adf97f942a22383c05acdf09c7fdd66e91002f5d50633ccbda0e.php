<?php

/* base.html.twig */
class __TwigTemplate_0624d9d2fdd17777ba1dd52a52bec1c18d733779ee58382387be3d511a516f62 extends Twig_Template
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
        $__internal_23c27d59ca5d7572a34bd3189bc7b54bc8b521d4ad26431dccbdbea1630c9f47 = $this->env->getExtension("native_profiler");
        $__internal_23c27d59ca5d7572a34bd3189bc7b54bc8b521d4ad26431dccbdbea1630c9f47->enter($__internal_23c27d59ca5d7572a34bd3189bc7b54bc8b521d4ad26431dccbdbea1630c9f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_23c27d59ca5d7572a34bd3189bc7b54bc8b521d4ad26431dccbdbea1630c9f47->leave($__internal_23c27d59ca5d7572a34bd3189bc7b54bc8b521d4ad26431dccbdbea1630c9f47_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5d345d2db5a3a6cc5e7cd232530683d39b6f0347ae21491b8a90fbe108e2fd = $this->env->getExtension("native_profiler");
        $__internal_6a5d345d2db5a3a6cc5e7cd232530683d39b6f0347ae21491b8a90fbe108e2fd->enter($__internal_6a5d345d2db5a3a6cc5e7cd232530683d39b6f0347ae21491b8a90fbe108e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6a5d345d2db5a3a6cc5e7cd232530683d39b6f0347ae21491b8a90fbe108e2fd->leave($__internal_6a5d345d2db5a3a6cc5e7cd232530683d39b6f0347ae21491b8a90fbe108e2fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e200c2711dc87696b06d407096e78568ad12b66ce4494d50fc4aca7278bb533 = $this->env->getExtension("native_profiler");
        $__internal_3e200c2711dc87696b06d407096e78568ad12b66ce4494d50fc4aca7278bb533->enter($__internal_3e200c2711dc87696b06d407096e78568ad12b66ce4494d50fc4aca7278bb533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e200c2711dc87696b06d407096e78568ad12b66ce4494d50fc4aca7278bb533->leave($__internal_3e200c2711dc87696b06d407096e78568ad12b66ce4494d50fc4aca7278bb533_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e2943f5c3bb994f3a3d9768c4797fafcb1b1a306cce7b6b2d0dc43db4e3ae0 = $this->env->getExtension("native_profiler");
        $__internal_67e2943f5c3bb994f3a3d9768c4797fafcb1b1a306cce7b6b2d0dc43db4e3ae0->enter($__internal_67e2943f5c3bb994f3a3d9768c4797fafcb1b1a306cce7b6b2d0dc43db4e3ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67e2943f5c3bb994f3a3d9768c4797fafcb1b1a306cce7b6b2d0dc43db4e3ae0->leave($__internal_67e2943f5c3bb994f3a3d9768c4797fafcb1b1a306cce7b6b2d0dc43db4e3ae0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0f52ce657ba922cecdc36ac6cdb398a225f8b12f37fa78d2a8ead39ff83cc1e = $this->env->getExtension("native_profiler");
        $__internal_c0f52ce657ba922cecdc36ac6cdb398a225f8b12f37fa78d2a8ead39ff83cc1e->enter($__internal_c0f52ce657ba922cecdc36ac6cdb398a225f8b12f37fa78d2a8ead39ff83cc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0f52ce657ba922cecdc36ac6cdb398a225f8b12f37fa78d2a8ead39ff83cc1e->leave($__internal_c0f52ce657ba922cecdc36ac6cdb398a225f8b12f37fa78d2a8ead39ff83cc1e_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
