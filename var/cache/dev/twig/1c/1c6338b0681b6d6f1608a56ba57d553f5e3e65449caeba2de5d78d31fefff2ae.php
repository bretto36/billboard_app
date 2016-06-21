<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_ad84d943ef188d1143e8dd05e3dfbbc1950e42d68d1ffdb0d3834046c02716cd extends Twig_Template
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
        $__internal_2bf7df951054c3ef67e54fbc4f492073ef7c6d7387f338146da3f19841216bc4 = $this->env->getExtension("native_profiler");
        $__internal_2bf7df951054c3ef67e54fbc4f492073ef7c6d7387f338146da3f19841216bc4->enter($__internal_2bf7df951054c3ef67e54fbc4f492073ef7c6d7387f338146da3f19841216bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_2bf7df951054c3ef67e54fbc4f492073ef7c6d7387f338146da3f19841216bc4->leave($__internal_2bf7df951054c3ef67e54fbc4f492073ef7c6d7387f338146da3f19841216bc4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
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
