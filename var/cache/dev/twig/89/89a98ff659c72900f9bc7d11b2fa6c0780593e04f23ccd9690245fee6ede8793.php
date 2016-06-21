<?php

/* @EasyAdmin/default/field_boolean.html.twig */
class __TwigTemplate_0a889dd88d2dbc59fe6d4f29028d2c7a8442cb62b6fc2485b195efbece0af73d extends Twig_Template
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
        $__internal_d91a7f243a5679bc7c9df480951677151a9bfd59a1fec2c8e4c9179bb01c1755 = $this->env->getExtension("native_profiler");
        $__internal_d91a7f243a5679bc7c9df480951677151a9bfd59a1fec2c8e4c9179bb01c1755->enter($__internal_d91a7f243a5679bc7c9df480951677151a9bfd59a1fec2c8e4c9179bb01c1755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_d91a7f243a5679bc7c9df480951677151a9bfd59a1fec2c8e4c9179bb01c1755->leave($__internal_d91a7f243a5679bc7c9df480951677151a9bfd59a1fec2c8e4c9179bb01c1755_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if value == true %}*/
/*     <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/* {% else %}*/
/*     <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/* {% endif %}*/
/* */
