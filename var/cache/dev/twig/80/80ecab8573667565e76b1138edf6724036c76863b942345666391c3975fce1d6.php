<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
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
        $__internal_1bf313b387d3978e9bfd780f08341c77c107683b17f3233be547788d0bb9bdd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf313b387d3978e9bfd780f08341c77c107683b17f3233be547788d0bb9bdd8->enter($__internal_1bf313b387d3978e9bfd780f08341c77c107683b17f3233be547788d0bb9bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_e051d551ee3f55502b0bfab213323c1530364707eb69712dfd18f8f81d3fa511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e051d551ee3f55502b0bfab213323c1530364707eb69712dfd18f8f81d3fa511->enter($__internal_e051d551ee3f55502b0bfab213323c1530364707eb69712dfd18f8f81d3fa511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1bf313b387d3978e9bfd780f08341c77c107683b17f3233be547788d0bb9bdd8->leave($__internal_1bf313b387d3978e9bfd780f08341c77c107683b17f3233be547788d0bb9bdd8_prof);

        
        $__internal_e051d551ee3f55502b0bfab213323c1530364707eb69712dfd18f8f81d3fa511->leave($__internal_e051d551ee3f55502b0bfab213323c1530364707eb69712dfd18f8f81d3fa511_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5a50fe1044c0a899f8d228f639537cd56c930d43746e3b1da36258dda2207d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a50fe1044c0a899f8d228f639537cd56c930d43746e3b1da36258dda2207d7a->enter($__internal_5a50fe1044c0a899f8d228f639537cd56c930d43746e3b1da36258dda2207d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2fa58e1a4ea9e0e3ff3492b121dabe9e9e2af487ed7bb1f51bc4c7707b77c517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa58e1a4ea9e0e3ff3492b121dabe9e9e2af487ed7bb1f51bc4c7707b77c517->enter($__internal_2fa58e1a4ea9e0e3ff3492b121dabe9e9e2af487ed7bb1f51bc4c7707b77c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2fa58e1a4ea9e0e3ff3492b121dabe9e9e2af487ed7bb1f51bc4c7707b77c517->leave($__internal_2fa58e1a4ea9e0e3ff3492b121dabe9e9e2af487ed7bb1f51bc4c7707b77c517_prof);

        
        $__internal_5a50fe1044c0a899f8d228f639537cd56c930d43746e3b1da36258dda2207d7a->leave($__internal_5a50fe1044c0a899f8d228f639537cd56c930d43746e3b1da36258dda2207d7a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8a2c80528e59c1799bcbb478874241ca5a43b8d7a2aa8c649897370167b2bc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2c80528e59c1799bcbb478874241ca5a43b8d7a2aa8c649897370167b2bc0b->enter($__internal_8a2c80528e59c1799bcbb478874241ca5a43b8d7a2aa8c649897370167b2bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7cf8fffdb799405f7ec65b2a63449f6cbb9675a0b9d1941ecf0f2bb35152ca22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf8fffdb799405f7ec65b2a63449f6cbb9675a0b9d1941ecf0f2bb35152ca22->enter($__internal_7cf8fffdb799405f7ec65b2a63449f6cbb9675a0b9d1941ecf0f2bb35152ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7cf8fffdb799405f7ec65b2a63449f6cbb9675a0b9d1941ecf0f2bb35152ca22->leave($__internal_7cf8fffdb799405f7ec65b2a63449f6cbb9675a0b9d1941ecf0f2bb35152ca22_prof);

        
        $__internal_8a2c80528e59c1799bcbb478874241ca5a43b8d7a2aa8c649897370167b2bc0b->leave($__internal_8a2c80528e59c1799bcbb478874241ca5a43b8d7a2aa8c649897370167b2bc0b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3ff7a8ee4b5520fc8ca63bd5161ca0361e3edb5d88c3eae4ef1d7d2a76661aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff7a8ee4b5520fc8ca63bd5161ca0361e3edb5d88c3eae4ef1d7d2a76661aff->enter($__internal_3ff7a8ee4b5520fc8ca63bd5161ca0361e3edb5d88c3eae4ef1d7d2a76661aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_1b6b33c46d7eba7acefaccfd839672cb1769721c87c3202814df7881f816556e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6b33c46d7eba7acefaccfd839672cb1769721c87c3202814df7881f816556e->enter($__internal_1b6b33c46d7eba7acefaccfd839672cb1769721c87c3202814df7881f816556e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_1b6b33c46d7eba7acefaccfd839672cb1769721c87c3202814df7881f816556e->leave($__internal_1b6b33c46d7eba7acefaccfd839672cb1769721c87c3202814df7881f816556e_prof);

        
        $__internal_3ff7a8ee4b5520fc8ca63bd5161ca0361e3edb5d88c3eae4ef1d7d2a76661aff->leave($__internal_3ff7a8ee4b5520fc8ca63bd5161ca0361e3edb5d88c3eae4ef1d7d2a76661aff_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d4e8b959ff9d2dc110400ac94f9159f82d160c3eaac4fa4cd7e3c73b22c46eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e8b959ff9d2dc110400ac94f9159f82d160c3eaac4fa4cd7e3c73b22c46eff->enter($__internal_d4e8b959ff9d2dc110400ac94f9159f82d160c3eaac4fa4cd7e3c73b22c46eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_fe744589f50f8352563d6ca05b64ae2e268e01439c7949bb81e66c5f8af0134a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe744589f50f8352563d6ca05b64ae2e268e01439c7949bb81e66c5f8af0134a->enter($__internal_fe744589f50f8352563d6ca05b64ae2e268e01439c7949bb81e66c5f8af0134a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_fe744589f50f8352563d6ca05b64ae2e268e01439c7949bb81e66c5f8af0134a->leave($__internal_fe744589f50f8352563d6ca05b64ae2e268e01439c7949bb81e66c5f8af0134a_prof);

        
        $__internal_d4e8b959ff9d2dc110400ac94f9159f82d160c3eaac4fa4cd7e3c73b22c46eff->leave($__internal_d4e8b959ff9d2dc110400ac94f9159f82d160c3eaac4fa4cd7e3c73b22c46eff_prof);

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
", "form_table_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
