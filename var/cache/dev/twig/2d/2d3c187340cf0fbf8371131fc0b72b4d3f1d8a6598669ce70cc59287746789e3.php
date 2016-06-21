<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_b7bb6924d66c90204d23be4247c4cf8a763c45a9eea6d5b9dd2141ada0a05e96 extends Twig_Template
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
        $__internal_22a61c4fe029b7a3d450c9e41e1488d2c0c279eb92862bcb99d067ec03b4f366 = $this->env->getExtension("native_profiler");
        $__internal_22a61c4fe029b7a3d450c9e41e1488d2c0c279eb92862bcb99d067ec03b4f366->enter($__internal_22a61c4fe029b7a3d450c9e41e1488d2c0c279eb92862bcb99d067ec03b4f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_22a61c4fe029b7a3d450c9e41e1488d2c0c279eb92862bcb99d067ec03b4f366->leave($__internal_22a61c4fe029b7a3d450c9e41e1488d2c0c279eb92862bcb99d067ec03b4f366_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */
