<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ee7855af26858a5ef1bd1e1c1fcdce0aa4354d2d51d765a9ad55345ee9a3d39f extends Twig_Template
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
        $__internal_2abbf250ef63f067036c1966c4c128eb2d71479ddaf234ef48c671010413e548 = $this->env->getExtension("native_profiler");
        $__internal_2abbf250ef63f067036c1966c4c128eb2d71479ddaf234ef48c671010413e548->enter($__internal_2abbf250ef63f067036c1966c4c128eb2d71479ddaf234ef48c671010413e548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2abbf250ef63f067036c1966c4c128eb2d71479ddaf234ef48c671010413e548->leave($__internal_2abbf250ef63f067036c1966c4c128eb2d71479ddaf234ef48c671010413e548_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
