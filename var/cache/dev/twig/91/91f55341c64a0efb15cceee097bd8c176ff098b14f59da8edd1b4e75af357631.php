<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c49e790b20693b092c69cae89e29a9604c7640608530aa4938fdc3358d7c7611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c691c47f93402163cdf43287b9654367bf398e54d616fa879a4f0b4c6045ace4 = $this->env->getExtension("native_profiler");
        $__internal_c691c47f93402163cdf43287b9654367bf398e54d616fa879a4f0b4c6045ace4->enter($__internal_c691c47f93402163cdf43287b9654367bf398e54d616fa879a4f0b4c6045ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c691c47f93402163cdf43287b9654367bf398e54d616fa879a4f0b4c6045ace4->leave($__internal_c691c47f93402163cdf43287b9654367bf398e54d616fa879a4f0b4c6045ace4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7486e8309d22d8b9d2d4b1d63cd0629d92428394b41f44a0ff4ae8225a97e2a = $this->env->getExtension("native_profiler");
        $__internal_a7486e8309d22d8b9d2d4b1d63cd0629d92428394b41f44a0ff4ae8225a97e2a->enter($__internal_a7486e8309d22d8b9d2d4b1d63cd0629d92428394b41f44a0ff4ae8225a97e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a7486e8309d22d8b9d2d4b1d63cd0629d92428394b41f44a0ff4ae8225a97e2a->leave($__internal_a7486e8309d22d8b9d2d4b1d63cd0629d92428394b41f44a0ff4ae8225a97e2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
