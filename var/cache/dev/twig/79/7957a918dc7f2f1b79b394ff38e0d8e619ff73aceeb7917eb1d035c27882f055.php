<?php

/* @EasyAdmin/default/field_guid.html.twig */
class __TwigTemplate_d942f533bc4fff96f7e4f528e52fd634ef5c739cbbdff77c2002bf718d19a281 extends Twig_Template
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
        $__internal_4a41f72d1c289ada498eca3b7a6f20849e78a022c0776affc928bf3b7e267d03 = $this->env->getExtension("native_profiler");
        $__internal_4a41f72d1c289ada498eca3b7a6f20849e78a022c0776affc928bf3b7e267d03->enter($__internal_4a41f72d1c289ada498eca3b7a6f20849e78a022c0776affc928bf3b7e267d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_guid.html.twig"));

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
        
        $__internal_4a41f72d1c289ada498eca3b7a6f20849e78a022c0776affc928bf3b7e267d03->leave($__internal_4a41f72d1c289ada498eca3b7a6f20849e78a022c0776affc928bf3b7e267d03_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_guid.html.twig";
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
