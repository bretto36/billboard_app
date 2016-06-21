<?php

/* @EasyAdmin/default/field_decimal.html.twig */
class __TwigTemplate_02468c09c3f5e51a8aa3b192335e6b4eee9da6b85ece4ceff1e05a69480828fa extends Twig_Template
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
        $__internal_cffa6fa96b03ee766ec0dcd728549af0f4843c6472338987e327056f2524f9a1 = $this->env->getExtension("native_profiler");
        $__internal_cffa6fa96b03ee766ec0dcd728549af0f4843c6472338987e327056f2524f9a1->enter($__internal_cffa6fa96b03ee766ec0dcd728549af0f4843c6472338987e327056f2524f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_cffa6fa96b03ee766ec0dcd728549af0f4843c6472338987e327056f2524f9a1->leave($__internal_cffa6fa96b03ee766ec0dcd728549af0f4843c6472338987e327056f2524f9a1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_decimal.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */
