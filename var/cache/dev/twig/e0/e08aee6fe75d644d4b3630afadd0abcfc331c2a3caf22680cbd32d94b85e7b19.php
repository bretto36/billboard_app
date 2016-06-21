<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_39fb1772aeb2d530e2a08a574cbcaa904db47f966ad0d2e5ae165b78f9400490 extends Twig_Template
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
        $__internal_fe1234be8451cb2c994832144b0e56134fac46f568ae74b99411b086d7e37a99 = $this->env->getExtension("native_profiler");
        $__internal_fe1234be8451cb2c994832144b0e56134fac46f568ae74b99411b086d7e37a99->enter($__internal_fe1234be8451cb2c994832144b0e56134fac46f568ae74b99411b086d7e37a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

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
        
        $__internal_fe1234be8451cb2c994832144b0e56134fac46f568ae74b99411b086d7e37a99->leave($__internal_fe1234be8451cb2c994832144b0e56134fac46f568ae74b99411b086d7e37a99_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
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
