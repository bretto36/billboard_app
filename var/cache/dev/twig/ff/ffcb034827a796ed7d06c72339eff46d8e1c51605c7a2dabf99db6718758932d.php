<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_874405b13366759ea9b18f2df6147cdd49416221a94299b86ec89b348c8bb548 extends Twig_Template
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
        $__internal_8781cbafd8a248fcd167e3702de5c34935b8e123544d011015962d6535d830da = $this->env->getExtension("native_profiler");
        $__internal_8781cbafd8a248fcd167e3702de5c34935b8e123544d011015962d6535d830da->enter($__internal_8781cbafd8a248fcd167e3702de5c34935b8e123544d011015962d6535d830da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8781cbafd8a248fcd167e3702de5c34935b8e123544d011015962d6535d830da->leave($__internal_8781cbafd8a248fcd167e3702de5c34935b8e123544d011015962d6535d830da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
