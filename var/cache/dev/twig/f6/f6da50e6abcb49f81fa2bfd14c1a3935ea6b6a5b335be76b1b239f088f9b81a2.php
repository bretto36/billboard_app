<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6b33cf915c673d21339630d2250800cad99e7565433e719e0b549eb9066a14b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_957d1760429e1ef11bad8fe9b321d4123d70e57271ccdcda033e3eed79c35df3 = $this->env->getExtension("native_profiler");
        $__internal_957d1760429e1ef11bad8fe9b321d4123d70e57271ccdcda033e3eed79c35df3->enter($__internal_957d1760429e1ef11bad8fe9b321d4123d70e57271ccdcda033e3eed79c35df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957d1760429e1ef11bad8fe9b321d4123d70e57271ccdcda033e3eed79c35df3->leave($__internal_957d1760429e1ef11bad8fe9b321d4123d70e57271ccdcda033e3eed79c35df3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dc5e49f0e599b2a73c78d0b760733399719f01aa13c960b5fe87af079078d77 = $this->env->getExtension("native_profiler");
        $__internal_5dc5e49f0e599b2a73c78d0b760733399719f01aa13c960b5fe87af079078d77->enter($__internal_5dc5e49f0e599b2a73c78d0b760733399719f01aa13c960b5fe87af079078d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_5dc5e49f0e599b2a73c78d0b760733399719f01aa13c960b5fe87af079078d77->leave($__internal_5dc5e49f0e599b2a73c78d0b760733399719f01aa13c960b5fe87af079078d77_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
