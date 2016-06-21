<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4db048fc1bc0a2c838c437d1e1505105c5b50e86eca3f55d5c330b34d384480d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_342a97fae3fa4635c73156ba4c6888caa73a99cd51a9cdb8ffb2821331ce5ffa = $this->env->getExtension("native_profiler");
        $__internal_342a97fae3fa4635c73156ba4c6888caa73a99cd51a9cdb8ffb2821331ce5ffa->enter($__internal_342a97fae3fa4635c73156ba4c6888caa73a99cd51a9cdb8ffb2821331ce5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_342a97fae3fa4635c73156ba4c6888caa73a99cd51a9cdb8ffb2821331ce5ffa->leave($__internal_342a97fae3fa4635c73156ba4c6888caa73a99cd51a9cdb8ffb2821331ce5ffa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f97377e57dd1a164e16da5e0d3fc1908e5bfaa1d0e0512636d89d28a88af22c = $this->env->getExtension("native_profiler");
        $__internal_1f97377e57dd1a164e16da5e0d3fc1908e5bfaa1d0e0512636d89d28a88af22c->enter($__internal_1f97377e57dd1a164e16da5e0d3fc1908e5bfaa1d0e0512636d89d28a88af22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1f97377e57dd1a164e16da5e0d3fc1908e5bfaa1d0e0512636d89d28a88af22c->leave($__internal_1f97377e57dd1a164e16da5e0d3fc1908e5bfaa1d0e0512636d89d28a88af22c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
