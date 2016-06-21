<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ea9a01b4e341b9fae42a406a5e3c3a84652625745ad14c1790b4005858ceb94d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_170d427e6f54b9b8ecf9bd3e17395693bf953548ef7d054f67c6f62bce329868 = $this->env->getExtension("native_profiler");
        $__internal_170d427e6f54b9b8ecf9bd3e17395693bf953548ef7d054f67c6f62bce329868->enter($__internal_170d427e6f54b9b8ecf9bd3e17395693bf953548ef7d054f67c6f62bce329868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170d427e6f54b9b8ecf9bd3e17395693bf953548ef7d054f67c6f62bce329868->leave($__internal_170d427e6f54b9b8ecf9bd3e17395693bf953548ef7d054f67c6f62bce329868_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4826ef4922378c3116c4c0acc1498440392a738976516d3ee5cf84be4b45c5d6 = $this->env->getExtension("native_profiler");
        $__internal_4826ef4922378c3116c4c0acc1498440392a738976516d3ee5cf84be4b45c5d6->enter($__internal_4826ef4922378c3116c4c0acc1498440392a738976516d3ee5cf84be4b45c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4826ef4922378c3116c4c0acc1498440392a738976516d3ee5cf84be4b45c5d6->leave($__internal_4826ef4922378c3116c4c0acc1498440392a738976516d3ee5cf84be4b45c5d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb65f37479f4d6553ed3d6f38472e6063450d1b0642dad036fbf8afca5359356 = $this->env->getExtension("native_profiler");
        $__internal_eb65f37479f4d6553ed3d6f38472e6063450d1b0642dad036fbf8afca5359356->enter($__internal_eb65f37479f4d6553ed3d6f38472e6063450d1b0642dad036fbf8afca5359356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eb65f37479f4d6553ed3d6f38472e6063450d1b0642dad036fbf8afca5359356->leave($__internal_eb65f37479f4d6553ed3d6f38472e6063450d1b0642dad036fbf8afca5359356_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
