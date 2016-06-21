<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_c8275f7652dc8a07a2a0356c26537eb2a33b12b3bb73af62c0ad45fc86a8d892 extends Twig_Template
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
        $__internal_3aaa68122399f4fe3b8c47000b55cceded7e350a14c9ed7a9fa147b9ffc625c0 = $this->env->getExtension("native_profiler");
        $__internal_3aaa68122399f4fe3b8c47000b55cceded7e350a14c9ed7a9fa147b9ffc625c0->enter($__internal_3aaa68122399f4fe3b8c47000b55cceded7e350a14c9ed7a9fa147b9ffc625c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_3aaa68122399f4fe3b8c47000b55cceded7e350a14c9ed7a9fa147b9ffc625c0->leave($__internal_3aaa68122399f4fe3b8c47000b55cceded7e350a14c9ed7a9fa147b9ffc625c0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */
