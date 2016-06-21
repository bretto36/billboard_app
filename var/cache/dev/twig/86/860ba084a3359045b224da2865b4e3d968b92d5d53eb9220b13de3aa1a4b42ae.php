<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f8ad3cdbc80abcb990ffb00ee8714efabe5192dec4b4227560fac06a6634f9c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e1872b05217f4c09f7a0091cf1ee68bcdc6e52a676740623b89236d29bbc85d1 = $this->env->getExtension("native_profiler");
        $__internal_e1872b05217f4c09f7a0091cf1ee68bcdc6e52a676740623b89236d29bbc85d1->enter($__internal_e1872b05217f4c09f7a0091cf1ee68bcdc6e52a676740623b89236d29bbc85d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1872b05217f4c09f7a0091cf1ee68bcdc6e52a676740623b89236d29bbc85d1->leave($__internal_e1872b05217f4c09f7a0091cf1ee68bcdc6e52a676740623b89236d29bbc85d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d0953871784f66fc4f6c47a09e6269f54aabd210d9d9674c111aa5b5204b82a = $this->env->getExtension("native_profiler");
        $__internal_9d0953871784f66fc4f6c47a09e6269f54aabd210d9d9674c111aa5b5204b82a->enter($__internal_9d0953871784f66fc4f6c47a09e6269f54aabd210d9d9674c111aa5b5204b82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d0953871784f66fc4f6c47a09e6269f54aabd210d9d9674c111aa5b5204b82a->leave($__internal_9d0953871784f66fc4f6c47a09e6269f54aabd210d9d9674c111aa5b5204b82a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0a9b91e0daae6688e60a2f96c35b6c9655eda19b0d63058636c0f22c2a07d37 = $this->env->getExtension("native_profiler");
        $__internal_c0a9b91e0daae6688e60a2f96c35b6c9655eda19b0d63058636c0f22c2a07d37->enter($__internal_c0a9b91e0daae6688e60a2f96c35b6c9655eda19b0d63058636c0f22c2a07d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0a9b91e0daae6688e60a2f96c35b6c9655eda19b0d63058636c0f22c2a07d37->leave($__internal_c0a9b91e0daae6688e60a2f96c35b6c9655eda19b0d63058636c0f22c2a07d37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_408a3a591b679d6bda5c3980e9be2031e06610e4ad9f244fb283c9d0f244a087 = $this->env->getExtension("native_profiler");
        $__internal_408a3a591b679d6bda5c3980e9be2031e06610e4ad9f244fb283c9d0f244a087->enter($__internal_408a3a591b679d6bda5c3980e9be2031e06610e4ad9f244fb283c9d0f244a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_408a3a591b679d6bda5c3980e9be2031e06610e4ad9f244fb283c9d0f244a087->leave($__internal_408a3a591b679d6bda5c3980e9be2031e06610e4ad9f244fb283c9d0f244a087_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
