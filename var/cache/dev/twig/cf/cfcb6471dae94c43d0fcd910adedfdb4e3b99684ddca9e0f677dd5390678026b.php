<?php

/* @EasyAdmin/default/field_url.html.twig */
class __TwigTemplate_606deffaa6102085d91c0609347d084e1d5149b6be2a1b5f57a69a130b56e93a extends Twig_Template
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
        $__internal_37f79ccb2c0649ded9acca2f54f8e4afcb8691e24c357769a021fba1e01c460d = $this->env->getExtension("native_profiler");
        $__internal_37f79ccb2c0649ded9acca2f54f8e4afcb8691e24c357769a021fba1e01c460d->enter($__internal_37f79ccb2c0649ded9acca2f54f8e4afcb8691e24c357769a021fba1e01c460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_url.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_37f79ccb2c0649ded9acca2f54f8e4afcb8691e24c357769a021fba1e01c460d->leave($__internal_37f79ccb2c0649ded9acca2f54f8e4afcb8691e24c357769a021fba1e01c460d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <a target="_blank" href="{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a target="_blank" href="{{ value }}">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */
