<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8fb45887c3083a67b9236c8c9c31b9c26832ce568a4f1b4f353057e660eabb03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_4132ca6f2f9a0cdadf07954d0de2764398d8e341cb8354fefb099a9cc28d639e = $this->env->getExtension("native_profiler");
        $__internal_4132ca6f2f9a0cdadf07954d0de2764398d8e341cb8354fefb099a9cc28d639e->enter($__internal_4132ca6f2f9a0cdadf07954d0de2764398d8e341cb8354fefb099a9cc28d639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4132ca6f2f9a0cdadf07954d0de2764398d8e341cb8354fefb099a9cc28d639e->leave($__internal_4132ca6f2f9a0cdadf07954d0de2764398d8e341cb8354fefb099a9cc28d639e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6031fb851616a6d805f65423b80d37efdde648ba376c9dc2c431aa77c1f76397 = $this->env->getExtension("native_profiler");
        $__internal_6031fb851616a6d805f65423b80d37efdde648ba376c9dc2c431aa77c1f76397->enter($__internal_6031fb851616a6d805f65423b80d37efdde648ba376c9dc2c431aa77c1f76397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6031fb851616a6d805f65423b80d37efdde648ba376c9dc2c431aa77c1f76397->leave($__internal_6031fb851616a6d805f65423b80d37efdde648ba376c9dc2c431aa77c1f76397_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
