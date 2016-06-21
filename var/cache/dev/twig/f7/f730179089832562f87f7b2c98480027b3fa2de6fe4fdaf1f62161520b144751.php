<?php

/* @EasyAdmin/default/field_smallint.html.twig */
class __TwigTemplate_d0cfba91c60ca2332f80f78071843a748dd176d6b9af25f0482ebbc221717b0b extends Twig_Template
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
        $__internal_af1375d3e89e8e52cf83df6981a5d8031f56806db9c388b2943baf39c32e37e6 = $this->env->getExtension("native_profiler");
        $__internal_af1375d3e89e8e52cf83df6981a5d8031f56806db9c388b2943baf39c32e37e6->enter($__internal_af1375d3e89e8e52cf83df6981a5d8031f56806db9c388b2943baf39c32e37e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

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
        
        $__internal_af1375d3e89e8e52cf83df6981a5d8031f56806db9c388b2943baf39c32e37e6->leave($__internal_af1375d3e89e8e52cf83df6981a5d8031f56806db9c388b2943baf39c32e37e6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_smallint.html.twig";
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
