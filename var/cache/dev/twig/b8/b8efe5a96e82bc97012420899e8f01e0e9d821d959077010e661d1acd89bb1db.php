<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_62282b8a475f23552020696bc6d75f109845c1609225be37296463672d095d35 extends Twig_Template
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
        $__internal_703ed1fb8cc134d1909ea639dccf8a01d43682469e361a815141ba175cb4f93a = $this->env->getExtension("native_profiler");
        $__internal_703ed1fb8cc134d1909ea639dccf8a01d43682469e361a815141ba175cb4f93a->enter($__internal_703ed1fb8cc134d1909ea639dccf8a01d43682469e361a815141ba175cb4f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_703ed1fb8cc134d1909ea639dccf8a01d43682469e361a815141ba175cb4f93a->leave($__internal_703ed1fb8cc134d1909ea639dccf8a01d43682469e361a815141ba175cb4f93a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
