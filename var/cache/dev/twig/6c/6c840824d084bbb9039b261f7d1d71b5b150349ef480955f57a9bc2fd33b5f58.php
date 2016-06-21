<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_bc4e359f0626bdedd96cd8d1d3773e5ea4097664e5438fd920abe141b3853c31 extends Twig_Template
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
        $__internal_e6e41d600b7ad21976d4dd1339f8d3fd9f0c50f12a4d11cbc604d481e44b4ac5 = $this->env->getExtension("native_profiler");
        $__internal_e6e41d600b7ad21976d4dd1339f8d3fd9f0c50f12a4d11cbc604d481e44b4ac5->enter($__internal_e6e41d600b7ad21976d4dd1339f8d3fd9f0c50f12a4d11cbc604d481e44b4ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e6e41d600b7ad21976d4dd1339f8d3fd9f0c50f12a4d11cbc604d481e44b4ac5->leave($__internal_e6e41d600b7ad21976d4dd1339f8d3fd9f0c50f12a4d11cbc604d481e44b4ac5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
