<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_84fdbcd4f9c91b72305b0cda16a03fe239677b9cf281cd5294690fbd46f41007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e2ce3dbf9d796f0da2ac1f77ad5c7ff35f3c1570efa28e1d7bdb05cc9fb22b9 = $this->env->getExtension("native_profiler");
        $__internal_7e2ce3dbf9d796f0da2ac1f77ad5c7ff35f3c1570efa28e1d7bdb05cc9fb22b9->enter($__internal_7e2ce3dbf9d796f0da2ac1f77ad5c7ff35f3c1570efa28e1d7bdb05cc9fb22b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2ce3dbf9d796f0da2ac1f77ad5c7ff35f3c1570efa28e1d7bdb05cc9fb22b9->leave($__internal_7e2ce3dbf9d796f0da2ac1f77ad5c7ff35f3c1570efa28e1d7bdb05cc9fb22b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab3f570a1e67b2bee77a371a2d092fa61a53e1de168bff8f29c3c4ace13537db = $this->env->getExtension("native_profiler");
        $__internal_ab3f570a1e67b2bee77a371a2d092fa61a53e1de168bff8f29c3c4ace13537db->enter($__internal_ab3f570a1e67b2bee77a371a2d092fa61a53e1de168bff8f29c3c4ace13537db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ab3f570a1e67b2bee77a371a2d092fa61a53e1de168bff8f29c3c4ace13537db->leave($__internal_ab3f570a1e67b2bee77a371a2d092fa61a53e1de168bff8f29c3c4ace13537db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
