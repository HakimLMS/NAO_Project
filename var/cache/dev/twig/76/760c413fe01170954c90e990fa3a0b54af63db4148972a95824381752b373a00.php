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
        $__internal_da32c7d1c4af8f68f9c267ea82ac2009be8a2c3e7feea9c89a1115e650baab3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da32c7d1c4af8f68f9c267ea82ac2009be8a2c3e7feea9c89a1115e650baab3d->enter($__internal_da32c7d1c4af8f68f9c267ea82ac2009be8a2c3e7feea9c89a1115e650baab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_204685662a53940099525bdfe44c39568c8db13e155c9cf9d668d425c50e8b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204685662a53940099525bdfe44c39568c8db13e155c9cf9d668d425c50e8b02->enter($__internal_204685662a53940099525bdfe44c39568c8db13e155c9cf9d668d425c50e8b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_da32c7d1c4af8f68f9c267ea82ac2009be8a2c3e7feea9c89a1115e650baab3d->leave($__internal_da32c7d1c4af8f68f9c267ea82ac2009be8a2c3e7feea9c89a1115e650baab3d_prof);

        
        $__internal_204685662a53940099525bdfe44c39568c8db13e155c9cf9d668d425c50e8b02->leave($__internal_204685662a53940099525bdfe44c39568c8db13e155c9cf9d668d425c50e8b02_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c23234cc4d3238e33a3196ab50efdfdf1884bd5f0aed3613706f291f139d69c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23234cc4d3238e33a3196ab50efdfdf1884bd5f0aed3613706f291f139d69c1->enter($__internal_c23234cc4d3238e33a3196ab50efdfdf1884bd5f0aed3613706f291f139d69c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3278495448ec54cf292caddf638abb679725e49ca4620d6de0b24f765e8e1b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3278495448ec54cf292caddf638abb679725e49ca4620d6de0b24f765e8e1b4f->enter($__internal_3278495448ec54cf292caddf638abb679725e49ca4620d6de0b24f765e8e1b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3278495448ec54cf292caddf638abb679725e49ca4620d6de0b24f765e8e1b4f->leave($__internal_3278495448ec54cf292caddf638abb679725e49ca4620d6de0b24f765e8e1b4f_prof);

        
        $__internal_c23234cc4d3238e33a3196ab50efdfdf1884bd5f0aed3613706f291f139d69c1->leave($__internal_c23234cc4d3238e33a3196ab50efdfdf1884bd5f0aed3613706f291f139d69c1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ffbd515a9c1e74b22c2920ab0d28b08c36508bdd9b51b602c79abe6e041bf5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbd515a9c1e74b22c2920ab0d28b08c36508bdd9b51b602c79abe6e041bf5b5->enter($__internal_ffbd515a9c1e74b22c2920ab0d28b08c36508bdd9b51b602c79abe6e041bf5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9779e809145764d95ee2c4c161547edb25ec9530aaf3b20af5b3273bd3e43094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9779e809145764d95ee2c4c161547edb25ec9530aaf3b20af5b3273bd3e43094->enter($__internal_9779e809145764d95ee2c4c161547edb25ec9530aaf3b20af5b3273bd3e43094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9779e809145764d95ee2c4c161547edb25ec9530aaf3b20af5b3273bd3e43094->leave($__internal_9779e809145764d95ee2c4c161547edb25ec9530aaf3b20af5b3273bd3e43094_prof);

        
        $__internal_ffbd515a9c1e74b22c2920ab0d28b08c36508bdd9b51b602c79abe6e041bf5b5->leave($__internal_ffbd515a9c1e74b22c2920ab0d28b08c36508bdd9b51b602c79abe6e041bf5b5_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_de6fb70a63dae5881eb5dfae6651bedf3f950c9cd02dde7a3ad2d91986694576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6fb70a63dae5881eb5dfae6651bedf3f950c9cd02dde7a3ad2d91986694576->enter($__internal_de6fb70a63dae5881eb5dfae6651bedf3f950c9cd02dde7a3ad2d91986694576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d670c110d06f70c72ffbad9db233ac3943d58ddb13d90d978c18f00795e10c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d670c110d06f70c72ffbad9db233ac3943d58ddb13d90d978c18f00795e10c2d->enter($__internal_d670c110d06f70c72ffbad9db233ac3943d58ddb13d90d978c18f00795e10c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d670c110d06f70c72ffbad9db233ac3943d58ddb13d90d978c18f00795e10c2d->leave($__internal_d670c110d06f70c72ffbad9db233ac3943d58ddb13d90d978c18f00795e10c2d_prof);

        
        $__internal_de6fb70a63dae5881eb5dfae6651bedf3f950c9cd02dde7a3ad2d91986694576->leave($__internal_de6fb70a63dae5881eb5dfae6651bedf3f950c9cd02dde7a3ad2d91986694576_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ce308fbfb70556d19ece1fd795d76b6014b7f41bb2e1386c81c3989dacb113df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce308fbfb70556d19ece1fd795d76b6014b7f41bb2e1386c81c3989dacb113df->enter($__internal_ce308fbfb70556d19ece1fd795d76b6014b7f41bb2e1386c81c3989dacb113df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ce6c20cf78d7fbd2e75e1e602243991423b6d057454df5f7857def1f6a4796b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6c20cf78d7fbd2e75e1e602243991423b6d057454df5f7857def1f6a4796b1->enter($__internal_ce6c20cf78d7fbd2e75e1e602243991423b6d057454df5f7857def1f6a4796b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_ce6c20cf78d7fbd2e75e1e602243991423b6d057454df5f7857def1f6a4796b1->leave($__internal_ce6c20cf78d7fbd2e75e1e602243991423b6d057454df5f7857def1f6a4796b1_prof);

        
        $__internal_ce308fbfb70556d19ece1fd795d76b6014b7f41bb2e1386c81c3989dacb113df->leave($__internal_ce308fbfb70556d19ece1fd795d76b6014b7f41bb2e1386c81c3989dacb113df_prof);

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
