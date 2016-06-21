<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c18189e4e85f319b97a9684ecdfe3b1c83713ddd1d11030ff982a6374d8a8045 extends Twig_Template
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
        $__internal_f4c3c8296000a7a1ad200211b4d96cae34d8ea18588d8b6b3c5cd5cc637bc364 = $this->env->getExtension("native_profiler");
        $__internal_f4c3c8296000a7a1ad200211b4d96cae34d8ea18588d8b6b3c5cd5cc637bc364->enter($__internal_f4c3c8296000a7a1ad200211b4d96cae34d8ea18588d8b6b3c5cd5cc637bc364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f4c3c8296000a7a1ad200211b4d96cae34d8ea18588d8b6b3c5cd5cc637bc364->leave($__internal_f4c3c8296000a7a1ad200211b4d96cae34d8ea18588d8b6b3c5cd5cc637bc364_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
