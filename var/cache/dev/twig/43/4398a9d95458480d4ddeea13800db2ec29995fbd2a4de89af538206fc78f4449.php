<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_7a2f9664125b03ef9d8ee98f093dec233578296bae256b3ac9ae0e7af7ac8fec extends Twig_Template
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
        $__internal_28f5f7aa96b612fb7b3bbcecb5588b55ba334514cfdd2b2c6599df88e6a8893e = $this->env->getExtension("native_profiler");
        $__internal_28f5f7aa96b612fb7b3bbcecb5588b55ba334514cfdd2b2c6599df88e6a8893e->enter($__internal_28f5f7aa96b612fb7b3bbcecb5588b55ba334514cfdd2b2c6599df88e6a8893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_28f5f7aa96b612fb7b3bbcecb5588b55ba334514cfdd2b2c6599df88e6a8893e->leave($__internal_28f5f7aa96b612fb7b3bbcecb5588b55ba334514cfdd2b2c6599df88e6a8893e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
