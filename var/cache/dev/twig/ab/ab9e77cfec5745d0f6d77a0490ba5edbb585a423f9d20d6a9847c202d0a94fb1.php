<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_68688487ba573b7406a244bea0329e1c141660ffffef27332dad521735b65e88 extends Twig_Template
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
        $__internal_05587d486e144780530cbc81d1ccdd904a37e440cf726d075d3d8c30eb4cca7e = $this->env->getExtension("native_profiler");
        $__internal_05587d486e144780530cbc81d1ccdd904a37e440cf726d075d3d8c30eb4cca7e->enter($__internal_05587d486e144780530cbc81d1ccdd904a37e440cf726d075d3d8c30eb4cca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_05587d486e144780530cbc81d1ccdd904a37e440cf726d075d3d8c30eb4cca7e->leave($__internal_05587d486e144780530cbc81d1ccdd904a37e440cf726d075d3d8c30eb4cca7e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
