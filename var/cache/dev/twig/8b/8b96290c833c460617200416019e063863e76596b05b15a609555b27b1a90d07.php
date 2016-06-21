<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dfc53bb8161ad366452d74fa8840ab177d33830e5eafc375e64b71c66f1e6efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a5d836ae6837b4891a92a914d0c3e0e24ed3ab18071a1183740d8b064fc10fe0 = $this->env->getExtension("native_profiler");
        $__internal_a5d836ae6837b4891a92a914d0c3e0e24ed3ab18071a1183740d8b064fc10fe0->enter($__internal_a5d836ae6837b4891a92a914d0c3e0e24ed3ab18071a1183740d8b064fc10fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d836ae6837b4891a92a914d0c3e0e24ed3ab18071a1183740d8b064fc10fe0->leave($__internal_a5d836ae6837b4891a92a914d0c3e0e24ed3ab18071a1183740d8b064fc10fe0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39517f2d50e301d0f95862b2bc022ad054cbc79e97c77ab0b48071df2a02f083 = $this->env->getExtension("native_profiler");
        $__internal_39517f2d50e301d0f95862b2bc022ad054cbc79e97c77ab0b48071df2a02f083->enter($__internal_39517f2d50e301d0f95862b2bc022ad054cbc79e97c77ab0b48071df2a02f083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_39517f2d50e301d0f95862b2bc022ad054cbc79e97c77ab0b48071df2a02f083->leave($__internal_39517f2d50e301d0f95862b2bc022ad054cbc79e97c77ab0b48071df2a02f083_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
