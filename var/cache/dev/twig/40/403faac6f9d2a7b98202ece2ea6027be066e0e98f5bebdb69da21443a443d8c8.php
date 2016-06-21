<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_cbc0431c792bfbc49305c8c9a5ba84eb42fb91593a9ce6ec28a98586d593a6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c915f7bdaacdd1e0bb6313c6ea39367a3559739731aacb6409b7c92dcaea98 = $this->env->getExtension("native_profiler");
        $__internal_51c915f7bdaacdd1e0bb6313c6ea39367a3559739731aacb6409b7c92dcaea98->enter($__internal_51c915f7bdaacdd1e0bb6313c6ea39367a3559739731aacb6409b7c92dcaea98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_51c915f7bdaacdd1e0bb6313c6ea39367a3559739731aacb6409b7c92dcaea98->leave($__internal_51c915f7bdaacdd1e0bb6313c6ea39367a3559739731aacb6409b7c92dcaea98_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3dda31c56a4b8f0cf386f6bf52dcca10d1ff0e961085078cc28cb65d85b65f41 = $this->env->getExtension("native_profiler");
        $__internal_3dda31c56a4b8f0cf386f6bf52dcca10d1ff0e961085078cc28cb65d85b65f41->enter($__internal_3dda31c56a4b8f0cf386f6bf52dcca10d1ff0e961085078cc28cb65d85b65f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3dda31c56a4b8f0cf386f6bf52dcca10d1ff0e961085078cc28cb65d85b65f41->leave($__internal_3dda31c56a4b8f0cf386f6bf52dcca10d1ff0e961085078cc28cb65d85b65f41_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fb4a06e72a46eb96103c3fc31847ca99dc142fbb231680fe8c94509a0d5c9508 = $this->env->getExtension("native_profiler");
        $__internal_fb4a06e72a46eb96103c3fc31847ca99dc142fbb231680fe8c94509a0d5c9508->enter($__internal_fb4a06e72a46eb96103c3fc31847ca99dc142fbb231680fe8c94509a0d5c9508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fb4a06e72a46eb96103c3fc31847ca99dc142fbb231680fe8c94509a0d5c9508->leave($__internal_fb4a06e72a46eb96103c3fc31847ca99dc142fbb231680fe8c94509a0d5c9508_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_242ba8655074b7e780b8495b4b5106a6215d42299c42e7328cb28098a286cef9 = $this->env->getExtension("native_profiler");
        $__internal_242ba8655074b7e780b8495b4b5106a6215d42299c42e7328cb28098a286cef9->enter($__internal_242ba8655074b7e780b8495b4b5106a6215d42299c42e7328cb28098a286cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_242ba8655074b7e780b8495b4b5106a6215d42299c42e7328cb28098a286cef9->leave($__internal_242ba8655074b7e780b8495b4b5106a6215d42299c42e7328cb28098a286cef9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
