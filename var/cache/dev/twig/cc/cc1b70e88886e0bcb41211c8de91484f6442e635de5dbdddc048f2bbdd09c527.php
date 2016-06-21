<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_098e4bb0d3a1275df1265858ff376b39c6a86c503eb9b026714e705201e89cdb extends Twig_Template
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
        $__internal_2a013faafbfad5377663a466a35425ac19a9ce2a4842e851b1884520c07f6807 = $this->env->getExtension("native_profiler");
        $__internal_2a013faafbfad5377663a466a35425ac19a9ce2a4842e851b1884520c07f6807->enter($__internal_2a013faafbfad5377663a466a35425ac19a9ce2a4842e851b1884520c07f6807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2a013faafbfad5377663a466a35425ac19a9ce2a4842e851b1884520c07f6807->leave($__internal_2a013faafbfad5377663a466a35425ac19a9ce2a4842e851b1884520c07f6807_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
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
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
