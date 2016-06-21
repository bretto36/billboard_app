<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_a71c9d5c07d49bd50c5fad8202a8d7197117070c0fc15563228bd142c3bf4782 extends Twig_Template
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
        $__internal_62d41be6460d7ca8174edad75fb722a5f6498f69dadbece9d8fcb935d55f7151 = $this->env->getExtension("native_profiler");
        $__internal_62d41be6460d7ca8174edad75fb722a5f6498f69dadbece9d8fcb935d55f7151->enter($__internal_62d41be6460d7ca8174edad75fb722a5f6498f69dadbece9d8fcb935d55f7151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_62d41be6460d7ca8174edad75fb722a5f6498f69dadbece9d8fcb935d55f7151->leave($__internal_62d41be6460d7ca8174edad75fb722a5f6498f69dadbece9d8fcb935d55f7151_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <a target="_blank" href="{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a target="_blank" href="{{ value }}">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */
