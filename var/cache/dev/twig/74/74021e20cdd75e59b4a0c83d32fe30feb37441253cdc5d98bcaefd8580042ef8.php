<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_eade995e18dd95330e20fa078579851ffd488bb17a35acfb293b065d876c3726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_4533e67098ebf7a0f427f18c65def1ea07200cf35d8950440a4bc0f04f0cc6d1 = $this->env->getExtension("native_profiler");
        $__internal_4533e67098ebf7a0f427f18c65def1ea07200cf35d8950440a4bc0f04f0cc6d1->enter($__internal_4533e67098ebf7a0f427f18c65def1ea07200cf35d8950440a4bc0f04f0cc6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4533e67098ebf7a0f427f18c65def1ea07200cf35d8950440a4bc0f04f0cc6d1->leave($__internal_4533e67098ebf7a0f427f18c65def1ea07200cf35d8950440a4bc0f04f0cc6d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4069964157cf9e0c873b6cb1e4afd575ddff6969887b639df3001ede10ca852d = $this->env->getExtension("native_profiler");
        $__internal_4069964157cf9e0c873b6cb1e4afd575ddff6969887b639df3001ede10ca852d->enter($__internal_4069964157cf9e0c873b6cb1e4afd575ddff6969887b639df3001ede10ca852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4069964157cf9e0c873b6cb1e4afd575ddff6969887b639df3001ede10ca852d->leave($__internal_4069964157cf9e0c873b6cb1e4afd575ddff6969887b639df3001ede10ca852d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
