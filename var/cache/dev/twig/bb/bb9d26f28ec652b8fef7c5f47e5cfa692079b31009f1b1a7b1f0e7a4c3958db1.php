<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cdcb6934e4b3c483054be964059efd35f1218dd847c93f4ff04411e3b81c6823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f2163cdb6f204294c83c8bee4fd6a83ac244e455a639aee84c00f94f71022c2d = $this->env->getExtension("native_profiler");
        $__internal_f2163cdb6f204294c83c8bee4fd6a83ac244e455a639aee84c00f94f71022c2d->enter($__internal_f2163cdb6f204294c83c8bee4fd6a83ac244e455a639aee84c00f94f71022c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2163cdb6f204294c83c8bee4fd6a83ac244e455a639aee84c00f94f71022c2d->leave($__internal_f2163cdb6f204294c83c8bee4fd6a83ac244e455a639aee84c00f94f71022c2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4d364d3151a9d8c906a7e1a212e32e6fa8b9f2e854debc7a7b6eaf549ebb13d = $this->env->getExtension("native_profiler");
        $__internal_b4d364d3151a9d8c906a7e1a212e32e6fa8b9f2e854debc7a7b6eaf549ebb13d->enter($__internal_b4d364d3151a9d8c906a7e1a212e32e6fa8b9f2e854debc7a7b6eaf549ebb13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b4d364d3151a9d8c906a7e1a212e32e6fa8b9f2e854debc7a7b6eaf549ebb13d->leave($__internal_b4d364d3151a9d8c906a7e1a212e32e6fa8b9f2e854debc7a7b6eaf549ebb13d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8fe167a8354b11b33e6238f9a71099b31f7dc3eed5afb6b8159e6ca924fb160 = $this->env->getExtension("native_profiler");
        $__internal_b8fe167a8354b11b33e6238f9a71099b31f7dc3eed5afb6b8159e6ca924fb160->enter($__internal_b8fe167a8354b11b33e6238f9a71099b31f7dc3eed5afb6b8159e6ca924fb160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b8fe167a8354b11b33e6238f9a71099b31f7dc3eed5afb6b8159e6ca924fb160->leave($__internal_b8fe167a8354b11b33e6238f9a71099b31f7dc3eed5afb6b8159e6ca924fb160_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18e6e156f526a0670745d8d047fe14dd4cbb4e30b58da1dbde019fa638c1a901 = $this->env->getExtension("native_profiler");
        $__internal_18e6e156f526a0670745d8d047fe14dd4cbb4e30b58da1dbde019fa638c1a901->enter($__internal_18e6e156f526a0670745d8d047fe14dd4cbb4e30b58da1dbde019fa638c1a901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_18e6e156f526a0670745d8d047fe14dd4cbb4e30b58da1dbde019fa638c1a901->leave($__internal_18e6e156f526a0670745d8d047fe14dd4cbb4e30b58da1dbde019fa638c1a901_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
