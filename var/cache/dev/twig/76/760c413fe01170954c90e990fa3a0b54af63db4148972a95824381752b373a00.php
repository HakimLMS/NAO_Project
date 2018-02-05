<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c28abcbd13129841cae784b14b65289cf1ac7943a90001ef0f36ca112d7dd8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b82d78f01aaba1588343230439d463b1e12afa7b9c8a05d7aad97c2b696b7c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82d78f01aaba1588343230439d463b1e12afa7b9c8a05d7aad97c2b696b7c5d->enter($__internal_b82d78f01aaba1588343230439d463b1e12afa7b9c8a05d7aad97c2b696b7c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_0836ed53eb1c65b72c928d8dbeed47bc836989c9a991f58ce505b55227c822fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0836ed53eb1c65b72c928d8dbeed47bc836989c9a991f58ce505b55227c822fa->enter($__internal_0836ed53eb1c65b72c928d8dbeed47bc836989c9a991f58ce505b55227c822fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_b82d78f01aaba1588343230439d463b1e12afa7b9c8a05d7aad97c2b696b7c5d->leave($__internal_b82d78f01aaba1588343230439d463b1e12afa7b9c8a05d7aad97c2b696b7c5d_prof);

        
        $__internal_0836ed53eb1c65b72c928d8dbeed47bc836989c9a991f58ce505b55227c822fa->leave($__internal_0836ed53eb1c65b72c928d8dbeed47bc836989c9a991f58ce505b55227c822fa_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_24a10ff9b710879e9de6ae4c5fe48cff26a39cad6a970d1ead75685f9a10d05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a10ff9b710879e9de6ae4c5fe48cff26a39cad6a970d1ead75685f9a10d05b->enter($__internal_24a10ff9b710879e9de6ae4c5fe48cff26a39cad6a970d1ead75685f9a10d05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1e4d295927e63defbc5288bc450f042b6665e32fc94548d522c4a99677b6c57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4d295927e63defbc5288bc450f042b6665e32fc94548d522c4a99677b6c57f->enter($__internal_1e4d295927e63defbc5288bc450f042b6665e32fc94548d522c4a99677b6c57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_1e4d295927e63defbc5288bc450f042b6665e32fc94548d522c4a99677b6c57f->leave($__internal_1e4d295927e63defbc5288bc450f042b6665e32fc94548d522c4a99677b6c57f_prof);

        
        $__internal_24a10ff9b710879e9de6ae4c5fe48cff26a39cad6a970d1ead75685f9a10d05b->leave($__internal_24a10ff9b710879e9de6ae4c5fe48cff26a39cad6a970d1ead75685f9a10d05b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6f84c277f3b10d204de5cbfc66b43b250f91a67690a4e24f044b50c2e4dd3f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f84c277f3b10d204de5cbfc66b43b250f91a67690a4e24f044b50c2e4dd3f56->enter($__internal_6f84c277f3b10d204de5cbfc66b43b250f91a67690a4e24f044b50c2e4dd3f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4320f0325fdef7d4550260e2bfe3700df6420e2a223b29faf431e7111a25401b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4320f0325fdef7d4550260e2bfe3700df6420e2a223b29faf431e7111a25401b->enter($__internal_4320f0325fdef7d4550260e2bfe3700df6420e2a223b29faf431e7111a25401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_4320f0325fdef7d4550260e2bfe3700df6420e2a223b29faf431e7111a25401b->leave($__internal_4320f0325fdef7d4550260e2bfe3700df6420e2a223b29faf431e7111a25401b_prof);

        
        $__internal_6f84c277f3b10d204de5cbfc66b43b250f91a67690a4e24f044b50c2e4dd3f56->leave($__internal_6f84c277f3b10d204de5cbfc66b43b250f91a67690a4e24f044b50c2e4dd3f56_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_51e03c11a3c4f7121eabf68e1a9b19cfdad6f097a0efeee393de1413ea9a729e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e03c11a3c4f7121eabf68e1a9b19cfdad6f097a0efeee393de1413ea9a729e->enter($__internal_51e03c11a3c4f7121eabf68e1a9b19cfdad6f097a0efeee393de1413ea9a729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b15d1b082b8c6e4e990e7b1d52da0eb977852fa29b0aa39b0fbc430f50d33097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15d1b082b8c6e4e990e7b1d52da0eb977852fa29b0aa39b0fbc430f50d33097->enter($__internal_b15d1b082b8c6e4e990e7b1d52da0eb977852fa29b0aa39b0fbc430f50d33097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b15d1b082b8c6e4e990e7b1d52da0eb977852fa29b0aa39b0fbc430f50d33097->leave($__internal_b15d1b082b8c6e4e990e7b1d52da0eb977852fa29b0aa39b0fbc430f50d33097_prof);

        
        $__internal_51e03c11a3c4f7121eabf68e1a9b19cfdad6f097a0efeee393de1413ea9a729e->leave($__internal_51e03c11a3c4f7121eabf68e1a9b19cfdad6f097a0efeee393de1413ea9a729e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c41889d3be20062cf0630dcc754dc4bb7b68fa5bd3a3a46e1e454a48d8154578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41889d3be20062cf0630dcc754dc4bb7b68fa5bd3a3a46e1e454a48d8154578->enter($__internal_c41889d3be20062cf0630dcc754dc4bb7b68fa5bd3a3a46e1e454a48d8154578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_59018f4c97f1ebd9feb90a79bff2bf0d955806bfe5545786af38035a3f62f50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59018f4c97f1ebd9feb90a79bff2bf0d955806bfe5545786af38035a3f62f50a->enter($__internal_59018f4c97f1ebd9feb90a79bff2bf0d955806bfe5545786af38035a3f62f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_59018f4c97f1ebd9feb90a79bff2bf0d955806bfe5545786af38035a3f62f50a->leave($__internal_59018f4c97f1ebd9feb90a79bff2bf0d955806bfe5545786af38035a3f62f50a_prof);

        
        $__internal_c41889d3be20062cf0630dcc754dc4bb7b68fa5bd3a3a46e1e454a48d8154578->leave($__internal_c41889d3be20062cf0630dcc754dc4bb7b68fa5bd3a3a46e1e454a48d8154578_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
