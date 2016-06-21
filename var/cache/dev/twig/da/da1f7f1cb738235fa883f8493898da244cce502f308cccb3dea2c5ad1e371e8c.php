<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_4d5fad6f72b8276417ff548705f0d202e580028f054579e982d794812e0f0780 extends Twig_Template
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
        $__internal_db063bbe0128dba6576e1c8f7a6ab6884f2f0169fa7e4f269c2e84ae10e9cc86 = $this->env->getExtension("native_profiler");
        $__internal_db063bbe0128dba6576e1c8f7a6ab6884f2f0169fa7e4f269c2e84ae10e9cc86->enter($__internal_db063bbe0128dba6576e1c8f7a6ab6884f2f0169fa7e4f269c2e84ae10e9cc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_db063bbe0128dba6576e1c8f7a6ab6884f2f0169fa7e4f269c2e84ae10e9cc86->leave($__internal_db063bbe0128dba6576e1c8f7a6ab6884f2f0169fa7e4f269c2e84ae10e9cc86_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
