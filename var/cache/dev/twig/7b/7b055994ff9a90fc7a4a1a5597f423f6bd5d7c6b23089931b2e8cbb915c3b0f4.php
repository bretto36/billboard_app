<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_bf48af0b94001897e068a585d2027c853450107075e01e1acc7c4e58d0aadeb2 extends Twig_Template
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
        $__internal_3cd67e70dc3d12432ad363dacf53f1d11695d8b108fad87269474089e72e2bfd = $this->env->getExtension("native_profiler");
        $__internal_3cd67e70dc3d12432ad363dacf53f1d11695d8b108fad87269474089e72e2bfd->enter($__internal_3cd67e70dc3d12432ad363dacf53f1d11695d8b108fad87269474089e72e2bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

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
        
        $__internal_3cd67e70dc3d12432ad363dacf53f1d11695d8b108fad87269474089e72e2bfd->leave($__internal_3cd67e70dc3d12432ad363dacf53f1d11695d8b108fad87269474089e72e2bfd_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
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
