<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ac21d07a44f9fe26de84097d63f7db09595019451175581a15b1ab6b58e43af9 extends Twig_Template
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
        $__internal_9aabd38baa9ec9c92f9b54af0bd24cf7ec3ff465538a4ae600e04c089332db33 = $this->env->getExtension("native_profiler");
        $__internal_9aabd38baa9ec9c92f9b54af0bd24cf7ec3ff465538a4ae600e04c089332db33->enter($__internal_9aabd38baa9ec9c92f9b54af0bd24cf7ec3ff465538a4ae600e04c089332db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9aabd38baa9ec9c92f9b54af0bd24cf7ec3ff465538a4ae600e04c089332db33->leave($__internal_9aabd38baa9ec9c92f9b54af0bd24cf7ec3ff465538a4ae600e04c089332db33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
