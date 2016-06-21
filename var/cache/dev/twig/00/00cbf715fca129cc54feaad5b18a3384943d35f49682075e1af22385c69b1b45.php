<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7e91b481c4a258979618f4699b8e5e19158984456d47c6eb9930c6648762da9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6885180397a38f82ab2fde8ed7003d71ed0556878bffeeb6bfea3813d3500e7c = $this->env->getExtension("native_profiler");
        $__internal_6885180397a38f82ab2fde8ed7003d71ed0556878bffeeb6bfea3813d3500e7c->enter($__internal_6885180397a38f82ab2fde8ed7003d71ed0556878bffeeb6bfea3813d3500e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6885180397a38f82ab2fde8ed7003d71ed0556878bffeeb6bfea3813d3500e7c->leave($__internal_6885180397a38f82ab2fde8ed7003d71ed0556878bffeeb6bfea3813d3500e7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eecc92f328695704abfcba4a00c5fb70a4982720a7ec1859889a12937b657db7 = $this->env->getExtension("native_profiler");
        $__internal_eecc92f328695704abfcba4a00c5fb70a4982720a7ec1859889a12937b657db7->enter($__internal_eecc92f328695704abfcba4a00c5fb70a4982720a7ec1859889a12937b657db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eecc92f328695704abfcba4a00c5fb70a4982720a7ec1859889a12937b657db7->leave($__internal_eecc92f328695704abfcba4a00c5fb70a4982720a7ec1859889a12937b657db7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
