<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_79497f66b5e2c1f41cfce49549e08b476a49c470f6dbb188638f10b4ac64ed7a extends Twig_Template
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
        $__internal_7a59bf2f4c077dcbf2e39dce88627ba731c3ffd13cdd269aa2415b7125489c27 = $this->env->getExtension("native_profiler");
        $__internal_7a59bf2f4c077dcbf2e39dce88627ba731c3ffd13cdd269aa2415b7125489c27->enter($__internal_7a59bf2f4c077dcbf2e39dce88627ba731c3ffd13cdd269aa2415b7125489c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_7a59bf2f4c077dcbf2e39dce88627ba731c3ffd13cdd269aa2415b7125489c27->leave($__internal_7a59bf2f4c077dcbf2e39dce88627ba731c3ffd13cdd269aa2415b7125489c27_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
