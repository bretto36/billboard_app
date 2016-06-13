<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de4b19877b5f11a61d94fff4c08545b3ae32f8aeff59a1a409f7796bb402a710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_261b196fbe9d4770618fd8094a1d755d3936ee2147d8e15b7a951fe36d0bce7e = $this->env->getExtension("native_profiler");
        $__internal_261b196fbe9d4770618fd8094a1d755d3936ee2147d8e15b7a951fe36d0bce7e->enter($__internal_261b196fbe9d4770618fd8094a1d755d3936ee2147d8e15b7a951fe36d0bce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261b196fbe9d4770618fd8094a1d755d3936ee2147d8e15b7a951fe36d0bce7e->leave($__internal_261b196fbe9d4770618fd8094a1d755d3936ee2147d8e15b7a951fe36d0bce7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fd759df0c9c481f49fab73e0522ecb40f6e2b491e73133045ac9e6e758123ae = $this->env->getExtension("native_profiler");
        $__internal_0fd759df0c9c481f49fab73e0522ecb40f6e2b491e73133045ac9e6e758123ae->enter($__internal_0fd759df0c9c481f49fab73e0522ecb40f6e2b491e73133045ac9e6e758123ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fd759df0c9c481f49fab73e0522ecb40f6e2b491e73133045ac9e6e758123ae->leave($__internal_0fd759df0c9c481f49fab73e0522ecb40f6e2b491e73133045ac9e6e758123ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2b0f17b3d403fbeafc3cfe8be57a1212ef9f94874528c5e6c36ad98c09e41af = $this->env->getExtension("native_profiler");
        $__internal_a2b0f17b3d403fbeafc3cfe8be57a1212ef9f94874528c5e6c36ad98c09e41af->enter($__internal_a2b0f17b3d403fbeafc3cfe8be57a1212ef9f94874528c5e6c36ad98c09e41af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2b0f17b3d403fbeafc3cfe8be57a1212ef9f94874528c5e6c36ad98c09e41af->leave($__internal_a2b0f17b3d403fbeafc3cfe8be57a1212ef9f94874528c5e6c36ad98c09e41af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6e32eacbadd45378f12bf8f31a0ec1e93f744d267b372ac5c418255623339fe = $this->env->getExtension("native_profiler");
        $__internal_e6e32eacbadd45378f12bf8f31a0ec1e93f744d267b372ac5c418255623339fe->enter($__internal_e6e32eacbadd45378f12bf8f31a0ec1e93f744d267b372ac5c418255623339fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6e32eacbadd45378f12bf8f31a0ec1e93f744d267b372ac5c418255623339fe->leave($__internal_e6e32eacbadd45378f12bf8f31a0ec1e93f744d267b372ac5c418255623339fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
