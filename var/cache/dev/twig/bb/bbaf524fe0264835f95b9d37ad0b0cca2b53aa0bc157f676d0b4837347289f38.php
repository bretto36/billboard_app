<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_503da2c3515dbf756fd881a86f0807b46874c7a1dca73ecad1548d07d4162acc extends Twig_Template
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
        $__internal_5c7de313fd068d560b9881a3f209211a61ba2d3a16735388ec319a68cfbca98e = $this->env->getExtension("native_profiler");
        $__internal_5c7de313fd068d560b9881a3f209211a61ba2d3a16735388ec319a68cfbca98e->enter($__internal_5c7de313fd068d560b9881a3f209211a61ba2d3a16735388ec319a68cfbca98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5c7de313fd068d560b9881a3f209211a61ba2d3a16735388ec319a68cfbca98e->leave($__internal_5c7de313fd068d560b9881a3f209211a61ba2d3a16735388ec319a68cfbca98e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
