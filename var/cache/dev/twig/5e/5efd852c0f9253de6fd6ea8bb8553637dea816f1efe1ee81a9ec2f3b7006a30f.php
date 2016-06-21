<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2ecc237ce27887b66f5df08584cd9e6832f5adc541886caf01fbe7f8fa71c239 extends Twig_Template
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
        $__internal_088e86f47198666004555c90d6291a301fe22a45369b7db1d91f8253fa622424 = $this->env->getExtension("native_profiler");
        $__internal_088e86f47198666004555c90d6291a301fe22a45369b7db1d91f8253fa622424->enter($__internal_088e86f47198666004555c90d6291a301fe22a45369b7db1d91f8253fa622424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_088e86f47198666004555c90d6291a301fe22a45369b7db1d91f8253fa622424->leave($__internal_088e86f47198666004555c90d6291a301fe22a45369b7db1d91f8253fa622424_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
