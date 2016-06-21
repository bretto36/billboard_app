<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_0b730685337d19d65cc0d0b85c0d5ff4da0c75b2bbefb2576a8ca46d47d728bd extends Twig_Template
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
        $__internal_eceab4718a196bdfaeabfd9d0fccf00250577a9aa29c7e822aa1051fc28889df = $this->env->getExtension("native_profiler");
        $__internal_eceab4718a196bdfaeabfd9d0fccf00250577a9aa29c7e822aa1051fc28889df->enter($__internal_eceab4718a196bdfaeabfd9d0fccf00250577a9aa29c7e822aa1051fc28889df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_eceab4718a196bdfaeabfd9d0fccf00250577a9aa29c7e822aa1051fc28889df->leave($__internal_eceab4718a196bdfaeabfd9d0fccf00250577a9aa29c7e822aa1051fc28889df_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
