<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7982378aaa90ae6dd8128a73bb4531e0742193907f8cc6b5da1af8f39e0c8faf extends Twig_Template
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
        $__internal_edaff7ce0bcde1e4f14824375cc94bcf3b9e6656abf72a49b45e391f5809b8b4 = $this->env->getExtension("native_profiler");
        $__internal_edaff7ce0bcde1e4f14824375cc94bcf3b9e6656abf72a49b45e391f5809b8b4->enter($__internal_edaff7ce0bcde1e4f14824375cc94bcf3b9e6656abf72a49b45e391f5809b8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_edaff7ce0bcde1e4f14824375cc94bcf3b9e6656abf72a49b45e391f5809b8b4->leave($__internal_edaff7ce0bcde1e4f14824375cc94bcf3b9e6656abf72a49b45e391f5809b8b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
