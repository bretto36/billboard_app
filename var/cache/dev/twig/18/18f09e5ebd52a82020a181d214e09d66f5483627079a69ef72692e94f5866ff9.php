<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f69b0cb9e563ed1452991d2d353a7ed0f03fcbc6a0d1dbadeec26a62c79ae4be extends Twig_Template
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
        $__internal_a9027683d8b74d98585ce0af3b77302915f2f57cb9de58c9e3f0941b532b5162 = $this->env->getExtension("native_profiler");
        $__internal_a9027683d8b74d98585ce0af3b77302915f2f57cb9de58c9e3f0941b532b5162->enter($__internal_a9027683d8b74d98585ce0af3b77302915f2f57cb9de58c9e3f0941b532b5162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a9027683d8b74d98585ce0af3b77302915f2f57cb9de58c9e3f0941b532b5162->leave($__internal_a9027683d8b74d98585ce0af3b77302915f2f57cb9de58c9e3f0941b532b5162_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
