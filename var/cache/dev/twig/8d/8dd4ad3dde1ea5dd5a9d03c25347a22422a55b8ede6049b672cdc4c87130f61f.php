<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3f83f8315bf5fb7310abf90da8203491b1b9cfa43a09ae28e1808afc3ce80452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_51123e51191d65a236b45535d07ba9402d9a79d40bd74f7e88c8889320096186 = $this->env->getExtension("native_profiler");
        $__internal_51123e51191d65a236b45535d07ba9402d9a79d40bd74f7e88c8889320096186->enter($__internal_51123e51191d65a236b45535d07ba9402d9a79d40bd74f7e88c8889320096186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51123e51191d65a236b45535d07ba9402d9a79d40bd74f7e88c8889320096186->leave($__internal_51123e51191d65a236b45535d07ba9402d9a79d40bd74f7e88c8889320096186_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c79fac08c3d45bab0e323918467794b2277714cd5f286c07eb553c775894c98c = $this->env->getExtension("native_profiler");
        $__internal_c79fac08c3d45bab0e323918467794b2277714cd5f286c07eb553c775894c98c->enter($__internal_c79fac08c3d45bab0e323918467794b2277714cd5f286c07eb553c775894c98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c79fac08c3d45bab0e323918467794b2277714cd5f286c07eb553c775894c98c->leave($__internal_c79fac08c3d45bab0e323918467794b2277714cd5f286c07eb553c775894c98c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
