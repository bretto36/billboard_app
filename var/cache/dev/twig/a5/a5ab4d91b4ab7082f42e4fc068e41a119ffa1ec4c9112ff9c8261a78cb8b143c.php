<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_d59e7c721ebd2f28ef312c77016a4b8b5f4258a7bbaeecff82dd902cebe9568f extends Twig_Template
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
        $__internal_c163be8ba0dffbf55f3957364d5af7ca2725455583a4a061df37c0054fcd33b3 = $this->env->getExtension("native_profiler");
        $__internal_c163be8ba0dffbf55f3957364d5af7ca2725455583a4a061df37c0054fcd33b3->enter($__internal_c163be8ba0dffbf55f3957364d5af7ca2725455583a4a061df37c0054fcd33b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_c163be8ba0dffbf55f3957364d5af7ca2725455583a4a061df37c0054fcd33b3->leave($__internal_c163be8ba0dffbf55f3957364d5af7ca2725455583a4a061df37c0054fcd33b3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */
