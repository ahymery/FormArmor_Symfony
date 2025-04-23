<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Admin/statut.html.twig */
class __TwigTemplate_42d05a5e1e8c99facef99d45be37402c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'FormArmor_body' => [$this, 'block_FormArmor_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/statut.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/statut.html.twig"));

        $this->parent = $this->loadTemplate("admin_layout.html.twig", "Admin/statut.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_FormArmor_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FormArmor_body"));

        // line 3
        yield "\t<h2>AFFICHAGE DES STATUTS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Identifiant</th>
\t\t\t<th>Type</th>
\t\t\t<th>Taux Horaire</th>
\t\t\t<th>Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lesStatuts"]) || array_key_exists("lesStatuts", $context) ? $context["lesStatuts"] : (function () { throw new RuntimeError('Variable "lesStatuts" does not exist.', 14, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 15
            yield "\t\t\t\t<tr ";
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15) % 2 == 0)) {
                yield " class=\"success\" ";
            } else {
                yield " class=\"info\" ";
            }
            yield ">
\t\t\t\t\t<td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "type", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "tauxHoraire", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
\t\t\t\t\t<td><a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatutModif", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatutSupp", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t\t</tbody>
\t</table>
\t
\t";
        // line 26
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["lesStatuts"]) || array_key_exists("lesStatuts", $context) ? $context["lesStatuts"] : (function () { throw new RuntimeError('Variable "lesStatuts" does not exist.', 26, $this->source); })()));
        yield "
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu2').attr('class', 'active');
\t\t});
\t</script>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/statut.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  154 => 26,  149 => 23,  132 => 20,  128 => 19,  124 => 18,  120 => 17,  116 => 16,  106 => 15,  89 => 14,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin_layout.html.twig' %}
{% block FormArmor_body %}
\t<h2>AFFICHAGE DES STATUTS</h2>
\t<table class=\"table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>Identifiant</th>
\t\t\t<th>Type</th>
\t\t\t<th>Taux Horaire</th>
\t\t\t<th>Option</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for statut in lesStatuts %}
\t\t\t\t<tr {# si le nombre de passages dans la boucle est pair #} {% if loop.index is even %} class=\"success\" {% else %} class=\"info\" {% endif %}>
\t\t\t\t\t<td>{{statut.id}}</td>
\t\t\t\t\t<td>{{statut.type}}</td>
\t\t\t\t\t<td>{{statut.tauxHoraire}}</td>
\t\t\t\t\t<td><a href=\"{{ path('adminStatutModif', {'id': statut.id}) }}\">Modifier</a></td>
\t\t\t\t\t<td><a href=\"{{ path('adminStatutSupp', {'id': statut.id}) }}\">Supprimer</a></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t
\t{{ knp_pagination_render(lesStatuts) }}
\t
\t<script>
\t\t\$(function() {
\t\t\t\$('#menu2').attr('class', 'active');
\t\t});
\t</script>
\t
{% endblock %}", "Admin/statut.html.twig", "C:\\wamp64\\www\\FormArmor\\templates\\admin\\statut.html.twig");
    }
}
