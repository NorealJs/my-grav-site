<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/03.about-us */
class __TwigTemplate_2e83d38fc529b5966c941b42f2633801 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<h1>About Us</h1>
<h2>Who We Are</h2>
<p>We are a school organization that provides activities, announcements, programs, and important information for students.</p>
<h2>Our Purpose</h2>
<p>Our organization aims to keep students informed and involved in school activities.</p>
<h2>What We Do</h2>
<p>We organize and share:</p>
<ul>
<li>School activities</li>
<li>Student programs</li>
<li>Announcements</li>
<li>Events</li>
<li>Important student information</li>
</ul>
<h2>Our Goal</h2>
<p>Our goal is to provide students with an easy and organized way to access important information about the organization.</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/03.about-us";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>About Us</h1>
<h2>Who We Are</h2>
<p>We are a school organization that provides activities, announcements, programs, and important information for students.</p>
<h2>Our Purpose</h2>
<p>Our organization aims to keep students informed and involved in school activities.</p>
<h2>What We Do</h2>
<p>We organize and share:</p>
<ul>
<li>School activities</li>
<li>Student programs</li>
<li>Announcements</li>
<li>Events</li>
<li>Important student information</li>
</ul>
<h2>Our Goal</h2>
<p>Our goal is to provide students with an easy and organized way to access important information about the organization.</p>", "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/03.about-us", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
