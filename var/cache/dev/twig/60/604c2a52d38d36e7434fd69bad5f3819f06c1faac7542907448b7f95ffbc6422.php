<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_279db4e1144295558ca9daebe268601f14a9b78dfb1b5afc66f29dc93dcf362a extends Twig_Template
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
        $__internal_fdbf5910e11655ec73d790ae7509584d6a1f26a28895ab03464a3c9704b514e5 = $this->env->getExtension("native_profiler");
        $__internal_fdbf5910e11655ec73d790ae7509584d6a1f26a28895ab03464a3c9704b514e5->enter($__internal_fdbf5910e11655ec73d790ae7509584d6a1f26a28895ab03464a3c9704b514e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fdbf5910e11655ec73d790ae7509584d6a1f26a28895ab03464a3c9704b514e5->leave($__internal_fdbf5910e11655ec73d790ae7509584d6a1f26a28895ab03464a3c9704b514e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
