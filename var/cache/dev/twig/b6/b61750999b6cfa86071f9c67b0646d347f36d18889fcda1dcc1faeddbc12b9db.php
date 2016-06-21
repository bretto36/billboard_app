<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_61bea9a81e2d5b60bd1d689930678e364910f31b3e6379973d02222ab3549693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_589f4052584865f793deb5b345f6ca1112a48ba8c6e993f7b171b4e52620a7d3 = $this->env->getExtension("native_profiler");
        $__internal_589f4052584865f793deb5b345f6ca1112a48ba8c6e993f7b171b4e52620a7d3->enter($__internal_589f4052584865f793deb5b345f6ca1112a48ba8c6e993f7b171b4e52620a7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589f4052584865f793deb5b345f6ca1112a48ba8c6e993f7b171b4e52620a7d3->leave($__internal_589f4052584865f793deb5b345f6ca1112a48ba8c6e993f7b171b4e52620a7d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18373736c37829f3ad7bfdeefcb53c005b23462944b284833e27a119a56e6911 = $this->env->getExtension("native_profiler");
        $__internal_18373736c37829f3ad7bfdeefcb53c005b23462944b284833e27a119a56e6911->enter($__internal_18373736c37829f3ad7bfdeefcb53c005b23462944b284833e27a119a56e6911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_18373736c37829f3ad7bfdeefcb53c005b23462944b284833e27a119a56e6911->leave($__internal_18373736c37829f3ad7bfdeefcb53c005b23462944b284833e27a119a56e6911_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
