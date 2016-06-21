<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e009a85a56ae281f2cb10d4a9f43b2a28ecbcfe1975fd1a880bc979caf06fc1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_91248bea98ffec3040a16c78860d8d52cc557dd56c3b092b9b05434d88e9bdba = $this->env->getExtension("native_profiler");
        $__internal_91248bea98ffec3040a16c78860d8d52cc557dd56c3b092b9b05434d88e9bdba->enter($__internal_91248bea98ffec3040a16c78860d8d52cc557dd56c3b092b9b05434d88e9bdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91248bea98ffec3040a16c78860d8d52cc557dd56c3b092b9b05434d88e9bdba->leave($__internal_91248bea98ffec3040a16c78860d8d52cc557dd56c3b092b9b05434d88e9bdba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e9f5e8314439b113afd61657ef084c00daefee851947f5ec2e6cf0a01735871 = $this->env->getExtension("native_profiler");
        $__internal_3e9f5e8314439b113afd61657ef084c00daefee851947f5ec2e6cf0a01735871->enter($__internal_3e9f5e8314439b113afd61657ef084c00daefee851947f5ec2e6cf0a01735871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3e9f5e8314439b113afd61657ef084c00daefee851947f5ec2e6cf0a01735871->leave($__internal_3e9f5e8314439b113afd61657ef084c00daefee851947f5ec2e6cf0a01735871_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
