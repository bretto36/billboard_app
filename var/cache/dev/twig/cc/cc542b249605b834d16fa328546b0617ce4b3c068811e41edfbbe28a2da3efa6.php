<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4c330f0bc7610b835446ba0350b04a9eaeeb90e5a3703cd4c805909e638a3ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_98a2cfd58c74021e536c973ae01344fc31a197c58ed0410916c8a9c5a07d8db3 = $this->env->getExtension("native_profiler");
        $__internal_98a2cfd58c74021e536c973ae01344fc31a197c58ed0410916c8a9c5a07d8db3->enter($__internal_98a2cfd58c74021e536c973ae01344fc31a197c58ed0410916c8a9c5a07d8db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a2cfd58c74021e536c973ae01344fc31a197c58ed0410916c8a9c5a07d8db3->leave($__internal_98a2cfd58c74021e536c973ae01344fc31a197c58ed0410916c8a9c5a07d8db3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5d26f8459c959425834e7ff887bd78818d3d9206e6ae12cb38f94ebe7dd0fb2 = $this->env->getExtension("native_profiler");
        $__internal_f5d26f8459c959425834e7ff887bd78818d3d9206e6ae12cb38f94ebe7dd0fb2->enter($__internal_f5d26f8459c959425834e7ff887bd78818d3d9206e6ae12cb38f94ebe7dd0fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_f5d26f8459c959425834e7ff887bd78818d3d9206e6ae12cb38f94ebe7dd0fb2->leave($__internal_f5d26f8459c959425834e7ff887bd78818d3d9206e6ae12cb38f94ebe7dd0fb2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
