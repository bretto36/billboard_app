<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_8dbb07dc0c66a15a47f45ac57ad03c736924e525f0d22e17c4ae05a3db0f7bbf extends Twig_Template
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
        $__internal_ac3046fc19d89289d3db45dad2a8453cc912d085090279717f9f66f6c69fb95d = $this->env->getExtension("native_profiler");
        $__internal_ac3046fc19d89289d3db45dad2a8453cc912d085090279717f9f66f6c69fb95d->enter($__internal_ac3046fc19d89289d3db45dad2a8453cc912d085090279717f9f66f6c69fb95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_ac3046fc19d89289d3db45dad2a8453cc912d085090279717f9f66f6c69fb95d->leave($__internal_ac3046fc19d89289d3db45dad2a8453cc912d085090279717f9f66f6c69fb95d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
