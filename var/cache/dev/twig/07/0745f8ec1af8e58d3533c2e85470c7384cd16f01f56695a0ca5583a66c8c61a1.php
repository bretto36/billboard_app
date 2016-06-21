<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_bfb1d69945b7d4f61e2a3e38adc8e7c9891e9192602948f130cfc0a78eadeafe extends Twig_Template
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
        $__internal_6a94a9accf6ff1baa5bce396ec0bf94f7a9fcf28645ede824e65ba39846bffa9 = $this->env->getExtension("native_profiler");
        $__internal_6a94a9accf6ff1baa5bce396ec0bf94f7a9fcf28645ede824e65ba39846bffa9->enter($__internal_6a94a9accf6ff1baa5bce396ec0bf94f7a9fcf28645ede824e65ba39846bffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6a94a9accf6ff1baa5bce396ec0bf94f7a9fcf28645ede824e65ba39846bffa9->leave($__internal_6a94a9accf6ff1baa5bce396ec0bf94f7a9fcf28645ede824e65ba39846bffa9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
