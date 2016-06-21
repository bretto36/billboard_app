<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_4ec53ad79d5020f7efe491d00659811c2fb1585d354575cca3e3a3b694944834 extends Twig_Template
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
        $__internal_b23a2da053a8b4410ea6c0a25ebe05b7d122a8d752974997129502bf0e32d4bb = $this->env->getExtension("native_profiler");
        $__internal_b23a2da053a8b4410ea6c0a25ebe05b7d122a8d752974997129502bf0e32d4bb->enter($__internal_b23a2da053a8b4410ea6c0a25ebe05b7d122a8d752974997129502bf0e32d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_b23a2da053a8b4410ea6c0a25ebe05b7d122a8d752974997129502bf0e32d4bb->leave($__internal_b23a2da053a8b4410ea6c0a25ebe05b7d122a8d752974997129502bf0e32d4bb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
