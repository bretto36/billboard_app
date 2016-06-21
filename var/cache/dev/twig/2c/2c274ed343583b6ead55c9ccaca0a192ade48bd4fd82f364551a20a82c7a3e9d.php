<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_cb4c23749eb0096b09f92916bd45d6db6b7d234813daf2d5d8cbe395bce85aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8490fbf45a715e8aad6181a631b27ee2a805b1bae169066320784311ac78311e = $this->env->getExtension("native_profiler");
        $__internal_8490fbf45a715e8aad6181a631b27ee2a805b1bae169066320784311ac78311e->enter($__internal_8490fbf45a715e8aad6181a631b27ee2a805b1bae169066320784311ac78311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8490fbf45a715e8aad6181a631b27ee2a805b1bae169066320784311ac78311e->leave($__internal_8490fbf45a715e8aad6181a631b27ee2a805b1bae169066320784311ac78311e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_baeeabca84ee38dfc400ca6c5ea88f0f7ab8c86c141d731582ee4d53cf25bea8 = $this->env->getExtension("native_profiler");
        $__internal_baeeabca84ee38dfc400ca6c5ea88f0f7ab8c86c141d731582ee4d53cf25bea8->enter($__internal_baeeabca84ee38dfc400ca6c5ea88f0f7ab8c86c141d731582ee4d53cf25bea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_baeeabca84ee38dfc400ca6c5ea88f0f7ab8c86c141d731582ee4d53cf25bea8->leave($__internal_baeeabca84ee38dfc400ca6c5ea88f0f7ab8c86c141d731582ee4d53cf25bea8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
