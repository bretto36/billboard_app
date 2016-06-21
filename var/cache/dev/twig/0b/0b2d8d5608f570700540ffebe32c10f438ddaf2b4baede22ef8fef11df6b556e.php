<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2ba3c29cbc1fc1e67480c471bef75cc9bec5ce3d0926b51212196c800c1b8491 extends Twig_Template
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
        $__internal_2f2ec5d810a1e0f79782c441ff5610449948170776d72d4b41064cd29aecba1f = $this->env->getExtension("native_profiler");
        $__internal_2f2ec5d810a1e0f79782c441ff5610449948170776d72d4b41064cd29aecba1f->enter($__internal_2f2ec5d810a1e0f79782c441ff5610449948170776d72d4b41064cd29aecba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f2ec5d810a1e0f79782c441ff5610449948170776d72d4b41064cd29aecba1f->leave($__internal_2f2ec5d810a1e0f79782c441ff5610449948170776d72d4b41064cd29aecba1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
