<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5c3b8293189a42e49fc77a02137a69de3d30be786b3cb7a29bc74842526e5666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_188219a2a6b027d47e4091cbf8e570790d33029a49a3221894afe0e5041b1c93 = $this->env->getExtension("native_profiler");
        $__internal_188219a2a6b027d47e4091cbf8e570790d33029a49a3221894afe0e5041b1c93->enter($__internal_188219a2a6b027d47e4091cbf8e570790d33029a49a3221894afe0e5041b1c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_188219a2a6b027d47e4091cbf8e570790d33029a49a3221894afe0e5041b1c93->leave($__internal_188219a2a6b027d47e4091cbf8e570790d33029a49a3221894afe0e5041b1c93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f24c8810f1d5bbe73130e7decff853ec48a64168ae6d3ecc7f835055d89b9c9a = $this->env->getExtension("native_profiler");
        $__internal_f24c8810f1d5bbe73130e7decff853ec48a64168ae6d3ecc7f835055d89b9c9a->enter($__internal_f24c8810f1d5bbe73130e7decff853ec48a64168ae6d3ecc7f835055d89b9c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f24c8810f1d5bbe73130e7decff853ec48a64168ae6d3ecc7f835055d89b9c9a->leave($__internal_f24c8810f1d5bbe73130e7decff853ec48a64168ae6d3ecc7f835055d89b9c9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
