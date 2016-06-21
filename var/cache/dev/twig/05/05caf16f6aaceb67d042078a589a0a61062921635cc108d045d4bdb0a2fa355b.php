<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_d5beb322d97b584031cbc02d8f742523758ee6ae53ffdf483ce64fe054b41195 extends Twig_Template
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
        $__internal_d95cb487ee81cdc3b7fafec1c7a34bfc857d2a6ed4e4c36dc309251bfe817a1e = $this->env->getExtension("native_profiler");
        $__internal_d95cb487ee81cdc3b7fafec1c7a34bfc857d2a6ed4e4c36dc309251bfe817a1e->enter($__internal_d95cb487ee81cdc3b7fafec1c7a34bfc857d2a6ed4e4c36dc309251bfe817a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_d95cb487ee81cdc3b7fafec1c7a34bfc857d2a6ed4e4c36dc309251bfe817a1e->leave($__internal_d95cb487ee81cdc3b7fafec1c7a34bfc857d2a6ed4e4c36dc309251bfe817a1e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
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
