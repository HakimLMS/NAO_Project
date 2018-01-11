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
        $__internal_1e26426c29a6696eb054fa065ef2e0b98c69a5652319273d0008e1d944e343a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e26426c29a6696eb054fa065ef2e0b98c69a5652319273d0008e1d944e343a9->enter($__internal_1e26426c29a6696eb054fa065ef2e0b98c69a5652319273d0008e1d944e343a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_1ec54b3352520571de7bcd2868176db41372f25d32160a9efce8556083042fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec54b3352520571de7bcd2868176db41372f25d32160a9efce8556083042fe8->enter($__internal_1ec54b3352520571de7bcd2868176db41372f25d32160a9efce8556083042fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_1e26426c29a6696eb054fa065ef2e0b98c69a5652319273d0008e1d944e343a9->leave($__internal_1e26426c29a6696eb054fa065ef2e0b98c69a5652319273d0008e1d944e343a9_prof);

        
        $__internal_1ec54b3352520571de7bcd2868176db41372f25d32160a9efce8556083042fe8->leave($__internal_1ec54b3352520571de7bcd2868176db41372f25d32160a9efce8556083042fe8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a48a3bb5b47ded11ef3b26cd89a37c34d62208ec60d6691afa63f9c4e662e6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48a3bb5b47ded11ef3b26cd89a37c34d62208ec60d6691afa63f9c4e662e6ea->enter($__internal_a48a3bb5b47ded11ef3b26cd89a37c34d62208ec60d6691afa63f9c4e662e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b8f5a0dab0bc496120af1d7edd2743d5f30cddc5c437506fa469f95a4c1a5298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f5a0dab0bc496120af1d7edd2743d5f30cddc5c437506fa469f95a4c1a5298->enter($__internal_b8f5a0dab0bc496120af1d7edd2743d5f30cddc5c437506fa469f95a4c1a5298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b8f5a0dab0bc496120af1d7edd2743d5f30cddc5c437506fa469f95a4c1a5298->leave($__internal_b8f5a0dab0bc496120af1d7edd2743d5f30cddc5c437506fa469f95a4c1a5298_prof);

        
        $__internal_a48a3bb5b47ded11ef3b26cd89a37c34d62208ec60d6691afa63f9c4e662e6ea->leave($__internal_a48a3bb5b47ded11ef3b26cd89a37c34d62208ec60d6691afa63f9c4e662e6ea_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1a76ec8ec91f86f001e5b66f842b1d5c3f343616408c193ac2f338ad577ab658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a76ec8ec91f86f001e5b66f842b1d5c3f343616408c193ac2f338ad577ab658->enter($__internal_1a76ec8ec91f86f001e5b66f842b1d5c3f343616408c193ac2f338ad577ab658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c9c3e65afc6e12364444fea989f3af3535f744e094293a5ff717c8932fe1cd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c3e65afc6e12364444fea989f3af3535f744e094293a5ff717c8932fe1cd13->enter($__internal_c9c3e65afc6e12364444fea989f3af3535f744e094293a5ff717c8932fe1cd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_c9c3e65afc6e12364444fea989f3af3535f744e094293a5ff717c8932fe1cd13->leave($__internal_c9c3e65afc6e12364444fea989f3af3535f744e094293a5ff717c8932fe1cd13_prof);

        
        $__internal_1a76ec8ec91f86f001e5b66f842b1d5c3f343616408c193ac2f338ad577ab658->leave($__internal_1a76ec8ec91f86f001e5b66f842b1d5c3f343616408c193ac2f338ad577ab658_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5f53dcf61ac4478ef91cd33535def72cfac3ea42f49c273a67bbfe4fbb520e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f53dcf61ac4478ef91cd33535def72cfac3ea42f49c273a67bbfe4fbb520e5d->enter($__internal_5f53dcf61ac4478ef91cd33535def72cfac3ea42f49c273a67bbfe4fbb520e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6b26961faaa24046c0c618ca29782767dd03cfb95dc70ef1105874c475edbddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b26961faaa24046c0c618ca29782767dd03cfb95dc70ef1105874c475edbddb->enter($__internal_6b26961faaa24046c0c618ca29782767dd03cfb95dc70ef1105874c475edbddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_6b26961faaa24046c0c618ca29782767dd03cfb95dc70ef1105874c475edbddb->leave($__internal_6b26961faaa24046c0c618ca29782767dd03cfb95dc70ef1105874c475edbddb_prof);

        
        $__internal_5f53dcf61ac4478ef91cd33535def72cfac3ea42f49c273a67bbfe4fbb520e5d->leave($__internal_5f53dcf61ac4478ef91cd33535def72cfac3ea42f49c273a67bbfe4fbb520e5d_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_8e24c89e760d5e9604a84c1b1faf22091456cd5b3c45456669dac72f8e53731e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e24c89e760d5e9604a84c1b1faf22091456cd5b3c45456669dac72f8e53731e->enter($__internal_8e24c89e760d5e9604a84c1b1faf22091456cd5b3c45456669dac72f8e53731e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_04e7e5e67358832889d6979770b15913bb6301add14ce11dcb2bbe1e81aa8e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e7e5e67358832889d6979770b15913bb6301add14ce11dcb2bbe1e81aa8e82->enter($__internal_04e7e5e67358832889d6979770b15913bb6301add14ce11dcb2bbe1e81aa8e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_04e7e5e67358832889d6979770b15913bb6301add14ce11dcb2bbe1e81aa8e82->leave($__internal_04e7e5e67358832889d6979770b15913bb6301add14ce11dcb2bbe1e81aa8e82_prof);

        
        $__internal_8e24c89e760d5e9604a84c1b1faf22091456cd5b3c45456669dac72f8e53731e->leave($__internal_8e24c89e760d5e9604a84c1b1faf22091456cd5b3c45456669dac72f8e53731e_prof);

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
