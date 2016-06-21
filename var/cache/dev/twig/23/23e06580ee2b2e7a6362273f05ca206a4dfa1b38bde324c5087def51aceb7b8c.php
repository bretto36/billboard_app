<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_7cc2f0a91923a95f0fab36866d83bf0ee20b1da4de556b7acc42119869702697 extends Twig_Template
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
        $__internal_b730febe7f82118c37fff4ea2941a1798c9950f712b64d3897a5962f045250a8 = $this->env->getExtension("native_profiler");
        $__internal_b730febe7f82118c37fff4ea2941a1798c9950f712b64d3897a5962f045250a8->enter($__internal_b730febe7f82118c37fff4ea2941a1798c9950f712b64d3897a5962f045250a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_b730febe7f82118c37fff4ea2941a1798c9950f712b64d3897a5962f045250a8->leave($__internal_b730febe7f82118c37fff4ea2941a1798c9950f712b64d3897a5962f045250a8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
