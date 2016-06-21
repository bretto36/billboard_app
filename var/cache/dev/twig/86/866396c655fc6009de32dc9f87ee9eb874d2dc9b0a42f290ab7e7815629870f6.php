<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d9c0f6234ad8e548bd2d2aaced1c521b6bfcdcbba439665b19a5da2ee056552d extends Twig_Template
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
        $__internal_5013b570aee8dd5dad287c910cf88b133be4eebbbe06ec5736076a9ae27d525a = $this->env->getExtension("native_profiler");
        $__internal_5013b570aee8dd5dad287c910cf88b133be4eebbbe06ec5736076a9ae27d525a->enter($__internal_5013b570aee8dd5dad287c910cf88b133be4eebbbe06ec5736076a9ae27d525a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5013b570aee8dd5dad287c910cf88b133be4eebbbe06ec5736076a9ae27d525a->leave($__internal_5013b570aee8dd5dad287c910cf88b133be4eebbbe06ec5736076a9ae27d525a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
