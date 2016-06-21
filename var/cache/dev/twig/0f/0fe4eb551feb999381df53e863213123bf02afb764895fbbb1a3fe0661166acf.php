<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_f52f579e1f6dc47a406598aac5e7134eddaea180ce252cac03d9279fa61db285 extends Twig_Template
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
        $__internal_56f5c307917b8ca207d3ad682001445c28d377a186ff481e333cc57f10bb3fbd = $this->env->getExtension("native_profiler");
        $__internal_56f5c307917b8ca207d3ad682001445c28d377a186ff481e333cc57f10bb3fbd->enter($__internal_56f5c307917b8ca207d3ad682001445c28d377a186ff481e333cc57f10bb3fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_56f5c307917b8ca207d3ad682001445c28d377a186ff481e333cc57f10bb3fbd->leave($__internal_56f5c307917b8ca207d3ad682001445c28d377a186ff481e333cc57f10bb3fbd_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
