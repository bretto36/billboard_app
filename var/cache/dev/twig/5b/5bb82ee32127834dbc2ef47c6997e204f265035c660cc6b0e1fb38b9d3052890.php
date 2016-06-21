<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f326ca0cf29e77d2a7c0d09cbfc0baadab7ace219ab3864c766d142704ab0937 extends Twig_Template
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
        $__internal_54dc6836bfcf262b400f6d7ec361a4d4f46eec977d3a200c3d64ca2b9d04aa2b = $this->env->getExtension("native_profiler");
        $__internal_54dc6836bfcf262b400f6d7ec361a4d4f46eec977d3a200c3d64ca2b9d04aa2b->enter($__internal_54dc6836bfcf262b400f6d7ec361a4d4f46eec977d3a200c3d64ca2b9d04aa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_54dc6836bfcf262b400f6d7ec361a4d4f46eec977d3a200c3d64ca2b9d04aa2b->leave($__internal_54dc6836bfcf262b400f6d7ec361a4d4f46eec977d3a200c3d64ca2b9d04aa2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
