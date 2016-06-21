<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ad9c49d6b4ce7b4ca3ab608b58bda9c7d7118b1fefadabc97e52a791ac164c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_ee4bcfa101dde8a927d489f7feacb464eac1b74c1e4c670c8cd6fd0448b5b855 = $this->env->getExtension("native_profiler");
        $__internal_ee4bcfa101dde8a927d489f7feacb464eac1b74c1e4c670c8cd6fd0448b5b855->enter($__internal_ee4bcfa101dde8a927d489f7feacb464eac1b74c1e4c670c8cd6fd0448b5b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4bcfa101dde8a927d489f7feacb464eac1b74c1e4c670c8cd6fd0448b5b855->leave($__internal_ee4bcfa101dde8a927d489f7feacb464eac1b74c1e4c670c8cd6fd0448b5b855_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a8c231361e18626c8512eeb154643bd0cea776af164bce02629af0aae432a97 = $this->env->getExtension("native_profiler");
        $__internal_0a8c231361e18626c8512eeb154643bd0cea776af164bce02629af0aae432a97->enter($__internal_0a8c231361e18626c8512eeb154643bd0cea776af164bce02629af0aae432a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0a8c231361e18626c8512eeb154643bd0cea776af164bce02629af0aae432a97->leave($__internal_0a8c231361e18626c8512eeb154643bd0cea776af164bce02629af0aae432a97_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
