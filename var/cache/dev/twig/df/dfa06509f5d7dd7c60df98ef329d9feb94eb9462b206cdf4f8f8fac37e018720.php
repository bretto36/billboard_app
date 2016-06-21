<?php

/* @EasyAdmin/default/field_tel.html.twig */
class __TwigTemplate_577f01070ae6616911addc637cb9cf3ef66ad14ced9a6927b6b8786abaefb421 extends Twig_Template
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
        $__internal_a8d64c4e9bf72da6afe4295cf2a691e3fc7f9ed2e408dc2b68bf6b3c00d8f7a6 = $this->env->getExtension("native_profiler");
        $__internal_a8d64c4e9bf72da6afe4295cf2a691e3fc7f9ed2e408dc2b68bf6b3c00d8f7a6->enter($__internal_a8d64c4e9bf72da6afe4295cf2a691e3fc7f9ed2e408dc2b68bf6b3c00d8f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_a8d64c4e9bf72da6afe4295cf2a691e3fc7f9ed2e408dc2b68bf6b3c00d8f7a6->leave($__internal_a8d64c4e9bf72da6afe4295cf2a691e3fc7f9ed2e408dc2b68bf6b3c00d8f7a6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */
