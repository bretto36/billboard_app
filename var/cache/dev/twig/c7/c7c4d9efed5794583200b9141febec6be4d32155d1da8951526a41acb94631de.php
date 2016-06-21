<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_bcbd98b548954c2878bfa4fa80659cfad21bcd4a47ec0e0737b0e37926c1a4c8 extends Twig_Template
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
        $__internal_3e27b8d396d1823d6fbaccee7118ce8b04be866fcb7012d36d2661e3933e1e85 = $this->env->getExtension("native_profiler");
        $__internal_3e27b8d396d1823d6fbaccee7118ce8b04be866fcb7012d36d2661e3933e1e85->enter($__internal_3e27b8d396d1823d6fbaccee7118ce8b04be866fcb7012d36d2661e3933e1e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3e27b8d396d1823d6fbaccee7118ce8b04be866fcb7012d36d2661e3933e1e85->leave($__internal_3e27b8d396d1823d6fbaccee7118ce8b04be866fcb7012d36d2661e3933e1e85_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */
