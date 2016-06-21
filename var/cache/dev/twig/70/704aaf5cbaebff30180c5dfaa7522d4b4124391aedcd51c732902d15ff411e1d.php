<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8250cf2f5eb9bfd984be4449c6839f8fd041d00f8c673ffab573232e2ef02668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c40c77e0225a5e745567ff080bcf49150dda3f97fa50cbbbe9be27d3bf16a832 = $this->env->getExtension("native_profiler");
        $__internal_c40c77e0225a5e745567ff080bcf49150dda3f97fa50cbbbe9be27d3bf16a832->enter($__internal_c40c77e0225a5e745567ff080bcf49150dda3f97fa50cbbbe9be27d3bf16a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c40c77e0225a5e745567ff080bcf49150dda3f97fa50cbbbe9be27d3bf16a832->leave($__internal_c40c77e0225a5e745567ff080bcf49150dda3f97fa50cbbbe9be27d3bf16a832_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e6a6de845999644d919034d84f2eed5e847259b09ce2f6c66f6b8f687c62321 = $this->env->getExtension("native_profiler");
        $__internal_9e6a6de845999644d919034d84f2eed5e847259b09ce2f6c66f6b8f687c62321->enter($__internal_9e6a6de845999644d919034d84f2eed5e847259b09ce2f6c66f6b8f687c62321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e6a6de845999644d919034d84f2eed5e847259b09ce2f6c66f6b8f687c62321->leave($__internal_9e6a6de845999644d919034d84f2eed5e847259b09ce2f6c66f6b8f687c62321_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_405f9ed44679bc58aca2dab701ce3243ddb4f634c902e742f55f078446316605 = $this->env->getExtension("native_profiler");
        $__internal_405f9ed44679bc58aca2dab701ce3243ddb4f634c902e742f55f078446316605->enter($__internal_405f9ed44679bc58aca2dab701ce3243ddb4f634c902e742f55f078446316605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_405f9ed44679bc58aca2dab701ce3243ddb4f634c902e742f55f078446316605->leave($__internal_405f9ed44679bc58aca2dab701ce3243ddb4f634c902e742f55f078446316605_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94bb2ec8e71fefd84e49fb2d9408c41b66fde0db9b2a1f91242f689f7d0d9a68 = $this->env->getExtension("native_profiler");
        $__internal_94bb2ec8e71fefd84e49fb2d9408c41b66fde0db9b2a1f91242f689f7d0d9a68->enter($__internal_94bb2ec8e71fefd84e49fb2d9408c41b66fde0db9b2a1f91242f689f7d0d9a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_94bb2ec8e71fefd84e49fb2d9408c41b66fde0db9b2a1f91242f689f7d0d9a68->leave($__internal_94bb2ec8e71fefd84e49fb2d9408c41b66fde0db9b2a1f91242f689f7d0d9a68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
