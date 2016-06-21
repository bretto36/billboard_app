<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_8049313a34ac2fd59f1ea00ab2ca6009855090c76394b88e27138e1cbfddfc70 extends Twig_Template
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
        $__internal_75aac5c8be6eb9c31ba7bdb1e156d2191d4ea9a6638456e02f73a2e39d594094 = $this->env->getExtension("native_profiler");
        $__internal_75aac5c8be6eb9c31ba7bdb1e156d2191d4ea9a6638456e02f73a2e39d594094->enter($__internal_75aac5c8be6eb9c31ba7bdb1e156d2191d4ea9a6638456e02f73a2e39d594094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_75aac5c8be6eb9c31ba7bdb1e156d2191d4ea9a6638456e02f73a2e39d594094->leave($__internal_75aac5c8be6eb9c31ba7bdb1e156d2191d4ea9a6638456e02f73a2e39d594094_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
