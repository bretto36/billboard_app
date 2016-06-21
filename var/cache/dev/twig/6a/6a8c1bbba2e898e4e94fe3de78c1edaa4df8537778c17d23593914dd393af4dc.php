<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_33a77a194b5359a781eb672a36326fc9cd5bd5a6bbb9837d6abd789f2f308e91 extends Twig_Template
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
        $__internal_da1c68db34f5bbedb60d9a1319d1eea8e5c27067bf2fc6af388cb1ebe40c4833 = $this->env->getExtension("native_profiler");
        $__internal_da1c68db34f5bbedb60d9a1319d1eea8e5c27067bf2fc6af388cb1ebe40c4833->enter($__internal_da1c68db34f5bbedb60d9a1319d1eea8e5c27067bf2fc6af388cb1ebe40c4833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_da1c68db34f5bbedb60d9a1319d1eea8e5c27067bf2fc6af388cb1ebe40c4833->leave($__internal_da1c68db34f5bbedb60d9a1319d1eea8e5c27067bf2fc6af388cb1ebe40c4833_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
