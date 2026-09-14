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

/* @Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/04.announcements */
class __TwigTemplate_386d4969f1e6fc4e88be5badf03110eb extends Template
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
        yield "<h1>Announcements</h1>
<p>Stay updated with the latest information from the organization.</p>
<h2>September 2026</h2>
<h3>Welcome to the New School Year</h3>
<p>Welcome students! We are excited to begin another school year with new activities and programs.</p>
<h3>Organization Meeting</h3>
<p><strong>Date:</strong> September 20, 2026</p>
<p><strong>Time:</strong> 3:00 PM</p>
<p><strong>Location:</strong> School Activity Room</p>
<p>All interested students are welcome to attend.</p>
<h3>Important Reminder</h3>
<p>Students are encouraged to regularly check this page for new announcements and updates.</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/04.announcements";
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
        return new Source("<h1>Announcements</h1>
<p>Stay updated with the latest information from the organization.</p>
<h2>September 2026</h2>
<h3>Welcome to the New School Year</h3>
<p>Welcome students! We are excited to begin another school year with new activities and programs.</p>
<h3>Organization Meeting</h3>
<p><strong>Date:</strong> September 20, 2026</p>
<p><strong>Time:</strong> 3:00 PM</p>
<p><strong>Location:</strong> School Activity Room</p>
<p>All interested students are welcome to attend.</p>
<h3>Important Reminder</h3>
<p>Students are encouraged to regularly check this page for new announcements and updates.</p>", "@Page:C:/laragon/www/LARAGON_WORKSPACE/grav/user/pages/04.announcements", "");
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
