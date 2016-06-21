<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7c27c52cea19a181fb351005bb75f28d3f17529695934d31d4cbcde48c992c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_bd98b784f959aa0209124a9ffef1e8a3e92180ebe2f2e751b1474ba872cfa647 = $this->env->getExtension("native_profiler");
        $__internal_bd98b784f959aa0209124a9ffef1e8a3e92180ebe2f2e751b1474ba872cfa647->enter($__internal_bd98b784f959aa0209124a9ffef1e8a3e92180ebe2f2e751b1474ba872cfa647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd98b784f959aa0209124a9ffef1e8a3e92180ebe2f2e751b1474ba872cfa647->leave($__internal_bd98b784f959aa0209124a9ffef1e8a3e92180ebe2f2e751b1474ba872cfa647_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_404f71dc3dbabcbba9596f1e86fe421e62ff846995df849a362bd385e17fdf91 = $this->env->getExtension("native_profiler");
        $__internal_404f71dc3dbabcbba9596f1e86fe421e62ff846995df849a362bd385e17fdf91->enter($__internal_404f71dc3dbabcbba9596f1e86fe421e62ff846995df849a362bd385e17fdf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_404f71dc3dbabcbba9596f1e86fe421e62ff846995df849a362bd385e17fdf91->leave($__internal_404f71dc3dbabcbba9596f1e86fe421e62ff846995df849a362bd385e17fdf91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eacf831f84a01f15683b2e64bbd4d1789f49ca6089f91bddfbd3a57a9defeb9 = $this->env->getExtension("native_profiler");
        $__internal_0eacf831f84a01f15683b2e64bbd4d1789f49ca6089f91bddfbd3a57a9defeb9->enter($__internal_0eacf831f84a01f15683b2e64bbd4d1789f49ca6089f91bddfbd3a57a9defeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0eacf831f84a01f15683b2e64bbd4d1789f49ca6089f91bddfbd3a57a9defeb9->leave($__internal_0eacf831f84a01f15683b2e64bbd4d1789f49ca6089f91bddfbd3a57a9defeb9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
