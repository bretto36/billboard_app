<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e3e404246264cf71d56c9a50f629284e93c39c9a16487d0a1be75c6be4508728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_44e5dd5ceab9f707c1a948a3075d325075103f12287b4e120aedda3eadd3d692 = $this->env->getExtension("native_profiler");
        $__internal_44e5dd5ceab9f707c1a948a3075d325075103f12287b4e120aedda3eadd3d692->enter($__internal_44e5dd5ceab9f707c1a948a3075d325075103f12287b4e120aedda3eadd3d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e5dd5ceab9f707c1a948a3075d325075103f12287b4e120aedda3eadd3d692->leave($__internal_44e5dd5ceab9f707c1a948a3075d325075103f12287b4e120aedda3eadd3d692_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bae9bbd551d0082b5748ee6e955849594c7ca99ec11605ece64fa6ef35ffeb60 = $this->env->getExtension("native_profiler");
        $__internal_bae9bbd551d0082b5748ee6e955849594c7ca99ec11605ece64fa6ef35ffeb60->enter($__internal_bae9bbd551d0082b5748ee6e955849594c7ca99ec11605ece64fa6ef35ffeb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_bae9bbd551d0082b5748ee6e955849594c7ca99ec11605ece64fa6ef35ffeb60->leave($__internal_bae9bbd551d0082b5748ee6e955849594c7ca99ec11605ece64fa6ef35ffeb60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
