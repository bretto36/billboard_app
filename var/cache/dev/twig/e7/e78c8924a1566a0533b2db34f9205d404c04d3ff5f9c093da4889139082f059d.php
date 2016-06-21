<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5f9e6a18620252bce1a395f227926e639a6225b801eceeb8d10b809db8a8016d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ca51228a8406839458ddc8340d945491e52e9953d03a106f30cf210273e3bcbd = $this->env->getExtension("native_profiler");
        $__internal_ca51228a8406839458ddc8340d945491e52e9953d03a106f30cf210273e3bcbd->enter($__internal_ca51228a8406839458ddc8340d945491e52e9953d03a106f30cf210273e3bcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca51228a8406839458ddc8340d945491e52e9953d03a106f30cf210273e3bcbd->leave($__internal_ca51228a8406839458ddc8340d945491e52e9953d03a106f30cf210273e3bcbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c951c35da578973f4f0dac2532b984d3a43d81e3a5ad4a378a30dbaccd7378c0 = $this->env->getExtension("native_profiler");
        $__internal_c951c35da578973f4f0dac2532b984d3a43d81e3a5ad4a378a30dbaccd7378c0->enter($__internal_c951c35da578973f4f0dac2532b984d3a43d81e3a5ad4a378a30dbaccd7378c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c951c35da578973f4f0dac2532b984d3a43d81e3a5ad4a378a30dbaccd7378c0->leave($__internal_c951c35da578973f4f0dac2532b984d3a43d81e3a5ad4a378a30dbaccd7378c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
