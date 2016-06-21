<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec4309297e1e25622ebdedbca016cf374b84dd50de246344824c296fc67bc0d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_bfe7f51e1fe3a2c143ea6a5fc03fedeb7b4316c07509c5335861c51e0f13a3de = $this->env->getExtension("native_profiler");
        $__internal_bfe7f51e1fe3a2c143ea6a5fc03fedeb7b4316c07509c5335861c51e0f13a3de->enter($__internal_bfe7f51e1fe3a2c143ea6a5fc03fedeb7b4316c07509c5335861c51e0f13a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe7f51e1fe3a2c143ea6a5fc03fedeb7b4316c07509c5335861c51e0f13a3de->leave($__internal_bfe7f51e1fe3a2c143ea6a5fc03fedeb7b4316c07509c5335861c51e0f13a3de_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e77cfc49907838e43398e605996e4da0c001d48649c6d349540ace26acceb807 = $this->env->getExtension("native_profiler");
        $__internal_e77cfc49907838e43398e605996e4da0c001d48649c6d349540ace26acceb807->enter($__internal_e77cfc49907838e43398e605996e4da0c001d48649c6d349540ace26acceb807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e77cfc49907838e43398e605996e4da0c001d48649c6d349540ace26acceb807->leave($__internal_e77cfc49907838e43398e605996e4da0c001d48649c6d349540ace26acceb807_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
