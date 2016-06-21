<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_14d2565ff137006a097b77a4cee344ce01ee11256657288ac0ec93a1158166ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_37d6cdaeb1aac55880418bf9e81485d8aefc3565d17d76f7fac5f15395595df1 = $this->env->getExtension("native_profiler");
        $__internal_37d6cdaeb1aac55880418bf9e81485d8aefc3565d17d76f7fac5f15395595df1->enter($__internal_37d6cdaeb1aac55880418bf9e81485d8aefc3565d17d76f7fac5f15395595df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d6cdaeb1aac55880418bf9e81485d8aefc3565d17d76f7fac5f15395595df1->leave($__internal_37d6cdaeb1aac55880418bf9e81485d8aefc3565d17d76f7fac5f15395595df1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca0ea2043a3a8948a95f9469fb66f9afbb419974113bce1c4ec863a21a95681d = $this->env->getExtension("native_profiler");
        $__internal_ca0ea2043a3a8948a95f9469fb66f9afbb419974113bce1c4ec863a21a95681d->enter($__internal_ca0ea2043a3a8948a95f9469fb66f9afbb419974113bce1c4ec863a21a95681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ca0ea2043a3a8948a95f9469fb66f9afbb419974113bce1c4ec863a21a95681d->leave($__internal_ca0ea2043a3a8948a95f9469fb66f9afbb419974113bce1c4ec863a21a95681d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
