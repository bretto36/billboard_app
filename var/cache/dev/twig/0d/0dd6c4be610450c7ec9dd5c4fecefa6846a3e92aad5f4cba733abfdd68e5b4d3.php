<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_84a4923bd1858f38b9e6b2a6bcdc56c845839d188874b32036e158060be3b324 extends Twig_Template
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
        $__internal_6f33e3a1f4962196d77ee187fa1080818bf1bd2ee0cc8b44bb70c46bc810f502 = $this->env->getExtension("native_profiler");
        $__internal_6f33e3a1f4962196d77ee187fa1080818bf1bd2ee0cc8b44bb70c46bc810f502->enter($__internal_6f33e3a1f4962196d77ee187fa1080818bf1bd2ee0cc8b44bb70c46bc810f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f33e3a1f4962196d77ee187fa1080818bf1bd2ee0cc8b44bb70c46bc810f502->leave($__internal_6f33e3a1f4962196d77ee187fa1080818bf1bd2ee0cc8b44bb70c46bc810f502_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bce2bfead421599b15f313c6f57ef02a4facc07164a6012e3541ad54c2a06cf = $this->env->getExtension("native_profiler");
        $__internal_6bce2bfead421599b15f313c6f57ef02a4facc07164a6012e3541ad54c2a06cf->enter($__internal_6bce2bfead421599b15f313c6f57ef02a4facc07164a6012e3541ad54c2a06cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bce2bfead421599b15f313c6f57ef02a4facc07164a6012e3541ad54c2a06cf->leave($__internal_6bce2bfead421599b15f313c6f57ef02a4facc07164a6012e3541ad54c2a06cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_689b668008c94790b0d172e620c3c93dcd0accd1299e59ae8a281d4ccee91cfc = $this->env->getExtension("native_profiler");
        $__internal_689b668008c94790b0d172e620c3c93dcd0accd1299e59ae8a281d4ccee91cfc->enter($__internal_689b668008c94790b0d172e620c3c93dcd0accd1299e59ae8a281d4ccee91cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_689b668008c94790b0d172e620c3c93dcd0accd1299e59ae8a281d4ccee91cfc->leave($__internal_689b668008c94790b0d172e620c3c93dcd0accd1299e59ae8a281d4ccee91cfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_093a84d55930168c979fbc9db26e449695f1b1b9e3df2c65ed185b30b7f8ede1 = $this->env->getExtension("native_profiler");
        $__internal_093a84d55930168c979fbc9db26e449695f1b1b9e3df2c65ed185b30b7f8ede1->enter($__internal_093a84d55930168c979fbc9db26e449695f1b1b9e3df2c65ed185b30b7f8ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_093a84d55930168c979fbc9db26e449695f1b1b9e3df2c65ed185b30b7f8ede1->leave($__internal_093a84d55930168c979fbc9db26e449695f1b1b9e3df2c65ed185b30b7f8ede1_prof);

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
