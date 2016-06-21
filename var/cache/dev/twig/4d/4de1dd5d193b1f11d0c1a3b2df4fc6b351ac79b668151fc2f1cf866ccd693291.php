<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_450a307559c26682fffa3ea8926adeb5f3a1366f4cdffca071564f11d655fc0d extends Twig_Template
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
        $__internal_de015dfbb5ad5d343476012e8b0b585bd3506fd308f3cbdefd0a9061f957115d = $this->env->getExtension("native_profiler");
        $__internal_de015dfbb5ad5d343476012e8b0b585bd3506fd308f3cbdefd0a9061f957115d->enter($__internal_de015dfbb5ad5d343476012e8b0b585bd3506fd308f3cbdefd0a9061f957115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_de015dfbb5ad5d343476012e8b0b585bd3506fd308f3cbdefd0a9061f957115d->leave($__internal_de015dfbb5ad5d343476012e8b0b585bd3506fd308f3cbdefd0a9061f957115d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
