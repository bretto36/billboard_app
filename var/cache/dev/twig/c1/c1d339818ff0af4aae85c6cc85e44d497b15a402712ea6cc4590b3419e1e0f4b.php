<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1166002b02c5406e82bb14d83a6c41a8a5f842616085a6d51817c147f9bcc276 extends Twig_Template
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
        $__internal_f838566e7ce27fa6864f07719f5934ca3ce8a34e5cf83ea022b2798a2587c99e = $this->env->getExtension("native_profiler");
        $__internal_f838566e7ce27fa6864f07719f5934ca3ce8a34e5cf83ea022b2798a2587c99e->enter($__internal_f838566e7ce27fa6864f07719f5934ca3ce8a34e5cf83ea022b2798a2587c99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f838566e7ce27fa6864f07719f5934ca3ce8a34e5cf83ea022b2798a2587c99e->leave($__internal_f838566e7ce27fa6864f07719f5934ca3ce8a34e5cf83ea022b2798a2587c99e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
