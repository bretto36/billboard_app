<?php

/* @EasyAdmin/default/field_email.html.twig */
class __TwigTemplate_5f870d02d0651c0b7496a37bbc5d913f5f9bab0413c299e0d996e2de2058da3a extends Twig_Template
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
        $__internal_31cc81c2ecc9df9e38fba8831731b5c60e3f20b1c34ad7a0a6c6276f76f45c27 = $this->env->getExtension("native_profiler");
        $__internal_31cc81c2ecc9df9e38fba8831731b5c60e3f20b1c34ad7a0a6c6276f76f45c27->enter($__internal_31cc81c2ecc9df9e38fba8831731b5c60e3f20b1c34ad7a0a6c6276f76f45c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_31cc81c2ecc9df9e38fba8831731b5c60e3f20b1c34ad7a0a6c6276f76f45c27->leave($__internal_31cc81c2ecc9df9e38fba8831731b5c60e3f20b1c34ad7a0a6c6276f76f45c27_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_email.html.twig";
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
/*     <a href="mailto:{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a href="mailto:{{ value }}">{{ value|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */
