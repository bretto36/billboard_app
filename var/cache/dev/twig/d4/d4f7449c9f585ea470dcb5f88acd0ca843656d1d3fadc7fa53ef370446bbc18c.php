<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_b134057fd5f0c93b778e08ab388d30536ee9fe383fb28fb129629d9707d3c924 extends Twig_Template
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
        $__internal_f15d554e8f771605f73ab66109c3f092d4a347d8c95ff7e6634450b69f71a8a4 = $this->env->getExtension("native_profiler");
        $__internal_f15d554e8f771605f73ab66109c3f092d4a347d8c95ff7e6634450b69f71a8a4->enter($__internal_f15d554e8f771605f73ab66109c3f092d4a347d8c95ff7e6634450b69f71a8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_f15d554e8f771605f73ab66109c3f092d4a347d8c95ff7e6634450b69f71a8a4->leave($__internal_f15d554e8f771605f73ab66109c3f092d4a347d8c95ff7e6634450b69f71a8a4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
