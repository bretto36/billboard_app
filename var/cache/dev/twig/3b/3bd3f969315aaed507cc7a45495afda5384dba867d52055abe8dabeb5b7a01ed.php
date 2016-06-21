<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_18d3cafbc48adc39a4859139f73146b413e2c65fc05ca2151b696e584a13b84c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdcc1f73ea839bf03decd51c4f47f34fcc35eb8139c34a2bd03a7d51e2a55fcd = $this->env->getExtension("native_profiler");
        $__internal_bdcc1f73ea839bf03decd51c4f47f34fcc35eb8139c34a2bd03a7d51e2a55fcd->enter($__internal_bdcc1f73ea839bf03decd51c4f47f34fcc35eb8139c34a2bd03a7d51e2a55fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bdcc1f73ea839bf03decd51c4f47f34fcc35eb8139c34a2bd03a7d51e2a55fcd->leave($__internal_bdcc1f73ea839bf03decd51c4f47f34fcc35eb8139c34a2bd03a7d51e2a55fcd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
