<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b198aeea8749cb42d2934bf3717b9e453bf70a3305e2c6c68a6541576de0ec67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2990cfdbeb2feddb02e78c08b5bb5d2c4a7f1f45bf2389f819f0110d00d5aac4 = $this->env->getExtension("native_profiler");
        $__internal_2990cfdbeb2feddb02e78c08b5bb5d2c4a7f1f45bf2389f819f0110d00d5aac4->enter($__internal_2990cfdbeb2feddb02e78c08b5bb5d2c4a7f1f45bf2389f819f0110d00d5aac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2990cfdbeb2feddb02e78c08b5bb5d2c4a7f1f45bf2389f819f0110d00d5aac4->leave($__internal_2990cfdbeb2feddb02e78c08b5bb5d2c4a7f1f45bf2389f819f0110d00d5aac4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2447d566d1e7c1cada849de5b3900fe1dd24221fb1e3c1b5b09ac4b991090996 = $this->env->getExtension("native_profiler");
        $__internal_2447d566d1e7c1cada849de5b3900fe1dd24221fb1e3c1b5b09ac4b991090996->enter($__internal_2447d566d1e7c1cada849de5b3900fe1dd24221fb1e3c1b5b09ac4b991090996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2447d566d1e7c1cada849de5b3900fe1dd24221fb1e3c1b5b09ac4b991090996->leave($__internal_2447d566d1e7c1cada849de5b3900fe1dd24221fb1e3c1b5b09ac4b991090996_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
