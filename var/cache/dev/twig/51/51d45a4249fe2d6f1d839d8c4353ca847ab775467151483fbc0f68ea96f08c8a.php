<?php

/* @EasyAdmin/default/field_datetimetz.html.twig */
class __TwigTemplate_f9701e2d9b978f9a40a776c9ca8c95d5cdcbff265dd44eae10a70b9301cb4470 extends Twig_Template
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
        $__internal_8f15bca0ebf2fd5d043aaa379ed1748dedae026e84d2c3c3e86efddff945b75b = $this->env->getExtension("native_profiler");
        $__internal_8f15bca0ebf2fd5d043aaa379ed1748dedae026e84d2c3c3e86efddff945b75b->enter($__internal_8f15bca0ebf2fd5d043aaa379ed1748dedae026e84d2c3c3e86efddff945b75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8f15bca0ebf2fd5d043aaa379ed1748dedae026e84d2c3c3e86efddff945b75b->leave($__internal_8f15bca0ebf2fd5d043aaa379ed1748dedae026e84d2c3c3e86efddff945b75b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetimetz.html.twig";
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
