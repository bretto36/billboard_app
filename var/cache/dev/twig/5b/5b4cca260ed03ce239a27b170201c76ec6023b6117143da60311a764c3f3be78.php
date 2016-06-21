<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_3b2b4951a9c226e1d790ec73d2eff2a45d30815fabf285f30fb72517c29d6e29 extends Twig_Template
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
        $__internal_a70965cb45607c033e0fd4da0e681b9f549000f59ea403e109b64c641317fa17 = $this->env->getExtension("native_profiler");
        $__internal_a70965cb45607c033e0fd4da0e681b9f549000f59ea403e109b64c641317fa17->enter($__internal_a70965cb45607c033e0fd4da0e681b9f549000f59ea403e109b64c641317fa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a70965cb45607c033e0fd4da0e681b9f549000f59ea403e109b64c641317fa17->leave($__internal_a70965cb45607c033e0fd4da0e681b9f549000f59ea403e109b64c641317fa17_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ value|date(field_options.format) }}*/
/* */
