<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $examples = [
            'General' => [
                [
                    'Einführung',
                    '<h2>Über mich</h2><p>Mein Name ist Rami Aouinti. Ich bin PHP-Backend-Entwickler mit <strong>mehr als acht Jahren Berufserfahrung</strong> in der Entwicklung moderner Webanwendungen, APIs und komplexer Backend-Systeme. Mein fachlicher Schwerpunkt liegt auf <strong>PHP, Symfony, Backend-Architektur und E-Commerce</strong>.</p><h3>Ausbildung und Weg nach Deutschland</h3><p>Mein Studium habe ich am <strong>INSAT in Tunis</strong> im Bereich Computernetzwerke und Telekommunikation absolviert. Im Jahr 2014 bin ich nach Deutschland gekommen. Anschließend habe ich Deutsch gelernt und die <strong>DSH-Prüfung auf C1-Niveau</strong> bestanden. Von 2015 bis 2018 habe ich an der <strong>Beuth Hochschule für Technik Berlin</strong> meinen Master im Bereich Telekommunikations- und Informationstechnik abgeschlossen.</p><h3>Beruflicher Schwerpunkt</h3><p>Seit 2018 arbeite ich als Softwareentwickler und habe in verschiedenen Unternehmen an Webanwendungen, Online-Shops, REST-APIs und komplexen Backend-Systemen mitgewirkt. Dabei habe ich sowohl neue Funktionen entwickelt als auch bestehende Anwendungen erweitert und technisch verbessert.</p><p>Besonders wichtig sind mir <strong>sauberer, wartbarer Code</strong>, durchdachte technische Lösungen und eine zuverlässige Integration unterschiedlicher Systeme. Ich arbeite mich gerne in neue Technologien und bestehende Codebasen ein und schätze die Zusammenarbeit im Team.</p>',
                    ''
                ],
                [
                    'Erfahrung',
                    '<h2>Beruflicher Werdegang</h2><p>In meinen bisherigen Positionen habe ich an unterschiedlichen E-Commerce- und Backend-Projekten gearbeitet – von Shopware-Plugins und Online-Shops bis hin zu Symfony-Microservices, REST-APIs und Cloud-Infrastrukturen.</p><h3>Wizmo GmbH <small>08/2018 – 04/2021 · Junior Full-Stack-Entwickler</small></h3><p>Bei Wizmo habe ich an verschiedenen Web- und E-Commerce-Projekten mitgearbeitet. Zu Beginn lag mein Schwerpunkt auf <strong>Zend Framework und Angular</strong>, später kamen <strong>Laravel und Vue.js</strong> stärker zum Einsatz. Ich habe bestehende Anwendungen erweitert, neue Funktionen umgesetzt und Shopware-Projekte weiterentwickelt. Dazu gehörten insbesondere die Entwicklung und Anpassung von Shopware-Plugins sowie individuelle Anforderungen im Backend und Frontend.</p><p>Im Team haben wir mit <strong>Acceptance Test-Driven Development (ATDD)</strong> und <strong>Pair Programming</strong> gearbeitet. Dadurch habe ich gelernt, Anforderungen gemeinsam zu verstehen, Änderungen mit Tests abzusichern und mich strukturiert in bestehende Codebasen einzuarbeiten.</p><h3>Hinke GmbH <small>11/2021 – 01/2024 · Senior Full-Stack-E-Commerce-Entwickler</small></h3><p>Bei Hinke lag mein Schwerpunkt auf <strong>B2C-E-Commerce</strong>, insbesondere auf dem Online-Shop Pfundskerl. Ich habe hauptsächlich mit <strong>OXID eShop und Symfony</strong> gearbeitet. Zu meinen Aufgaben gehörten die Entwicklung neuer Shop-Funktionen, die Erweiterung bestehender Module, die Umsetzung von Schnittstellen sowie die Wartung und kontinuierliche Weiterentwicklung der Anwendungen.</p><p>Dabei habe ich Backend- und Frontend-Aufgaben übernommen und eng mit den fachlichen Ansprechpartnern zusammengearbeitet. Anforderungen aus dem operativen Geschäft habe ich gemeinsam mit den Beteiligten geklärt und in passende technische Lösungen umgesetzt.</p><h3>TK Deutschland <small>02/2024 – 02/2026 · Backend-Entwickler</small></h3><p>Bei TK Deutschland habe ich schwerpunktmäßig mit <strong>PHP und Symfony 6</strong> an REST-basierten Microservices gearbeitet. Ich habe Backend-Services und APIs entwickelt, bestehende Schnittstellen erweitert und externe Systeme angebunden – unter anderem Integrationen mit <strong>Microsoft Graph und Intune</strong> sowie weiteren Plattformen und Kommunikationsdiensten.</p><p>Die Services liefen containerisiert mit <strong>Docker in Azure und Kubernetes (AKS)</strong>. Außerdem war ich an CI/CD-Prozessen und am technischen Betrieb der Anwendungen beteiligt. Je nach Anwendungsfall kamen <strong>RabbitMQ, Redis, Elasticsearch, RoadRunner und Temporal</strong> zum Einsatz. Für Tests und Debugging habe ich <strong>PHPUnit und Xdebug</strong> verwendet; Monitoring und Observability erfolgten unter anderem mit <strong>Prometheus und Grafana</strong>.</p><p>Im Mittelpunkt standen für mich eine zuverlässige Kommunikation zwischen Services, stabile Schnittstellen, eine strukturierte Fehleranalyse und eine sichere Bereitstellung der Backend-Anwendungen.</p>',
                    ''
                ],
            ],
            'Project' => [
                ['Project overview', 'Keep project updates, decisions and milestones in one place.', 'Use this category to share project context, progress updates, milestones and decisions. Add enough detail so that everyone can understand what changed and what needs attention next.'],
                ['Next milestones', 'A concise view of the upcoming work and priorities.', 'Describe the next milestones, the expected outcome and any dependencies. Update this post as the project evolves so the team always has a reliable overview.'],
            ],
            'Others' => [
                ['Useful resources', 'Links, references and material worth keeping close.', 'Collect useful resources and references here. Add a short explanation for each item so readers understand why it is relevant and when they might need it.'],
                ['Open discussion', 'Topics that are interesting but do not fit elsewhere.', 'A flexible place for miscellaneous topics, suggestions and open discussions. Keep posts focused and use a descriptive title to make them easy to find.'],
                [
                    'Warum haben Sie TK Deutschland verlassen?',
                    'Bei TK Deutschland haben sich die Ausrichtung und die Projekte verändert. Deshalb habe ich mich beruflich neu orientiert, um weiterhin mit PHP und Symfony zu arbeiten.',
                    'Bei TK Deutschland gab es Veränderungen in der Ausrichtung und in den Projekten. Ursprünglich war geplant, neue Backend-Services mit PHP und Symfony aufzubauen und bestehende Systeme schrittweise zu modernisieren.\n\nIm Laufe der Zeit hat sich der Schwerpunkt aber stärker in Richtung bestehender Legacy-Systeme und .NET entwickelt. Deshalb habe ich mich entschieden, mich beruflich neu zu orientieren und eine Position zu suchen, die besser zu meinem Schwerpunkt in der PHP- und Backend-Entwicklung passt.',
                ],
                [
                    'Warum interessieren Sie sich für diese Stelle?',
                    'Die Kombination aus Softwareentwicklung, ERP-Systemen und Oracle passt sehr gut zu meiner bisherigen Erfahrung und meinen Interessen.',
                    'Die Stelle hat mich angesprochen, weil sie sehr gut zu meiner bisherigen Erfahrung passt. Besonders interessant finde ich die Kombination aus Softwareentwicklung, ERP-Systemen und Oracle.\n\nIch habe mir das Unternehmen ein bisschen angeschaut und finde es wirklich interessant. Lürssen ist ein traditionsreiches deutsches Unternehmen im Schiffbau und baut unter anderem große und hochwertige Yachten. Besonders interessant finde ich, dass hinter solchen Produkten sehr komplexe Geschäftsprozesse stehen, zum Beispiel in der Produktion, im Einkauf, im Materialmanagement und in der Logistik. Ich kann mir vorstellen, dass die IT und die ERP-Systeme dort eine sehr wichtige Rolle spielen.',
                ],
                [
                    'Was erwarten Sie von Ihrer neuen Stelle?',
                    'Ich wünsche mir abwechslungsreiche Aufgaben, technische Herausforderungen, ein gutes Team und die Möglichkeit, mich langfristig weiterzuentwickeln.',
                    'Ich wünsche mir abwechslungsreiche Aufgaben, bei denen ich sowohl an bestehenden Anwendungen arbeiten als auch neue Funktionen entwickeln kann.\n\nMir ist wichtig, dass ich technisch arbeiten kann, aber auch die fachlichen Anforderungen verstehe. Außerdem wünsche ich mir ein gutes Team, einen offenen Austausch und die Möglichkeit, mich langfristig weiterzuentwickeln.',
                ],
                [
                    'Was ist Ihnen bei einem Arbeitgeber wichtig?',
                    'Ein gutes Arbeitsklima, gegenseitiger Respekt, Teamarbeit und ein offener Austausch über technische Lösungen sind mir wichtig.',
                    'Mir sind ein gutes Arbeitsklima, ein respektvoller Umgang und eine gute Zusammenarbeit im Team wichtig. Außerdem finde ich es wichtig, dass man offen über technische Lösungen sprechen kann und gemeinsam versucht, gute Ergebnisse zu erreichen.',
                ],
                [
                    'Wo sehen Sie sich in fünf Jahren?',
                    'Ich möchte mich technisch weiterentwickeln, mehr Verantwortung übernehmen und mich besonders mit komplexen Systemarchitekturen und KI-Integration beschäftigen.',
                    'Ich möchte mich technisch weiterentwickeln und noch mehr Erfahrung mit komplexen Anwendungen und Systemarchitekturen sammeln. Besonders interessiere ich mich auch für die Integration von KI in bestehende Anwendungen und Geschäftsprozesse. Ich finde es spannend, wie man KI sinnvoll einsetzen kann, um Prozesse zu automatisieren und Anwendungen intelligenter zu machen.\n\nAllgemein sehe ich mich weiterhin in der Softwareentwicklung, mit mehr Verantwortung für technische Lösungen, Architekturentscheidungen und die Qualität der Anwendungen.',
                ],
                [
                    'Was sind Ihre größten Stärken?',
                    'Ich bin lösungsorientiert, arbeite selbstständig, lerne gerne neue Technologien und lege großen Wert auf sauberen und wartbaren Code.',
                    'Ich würde sagen, dass ich sehr lösungsorientiert bin. Wenn ich ein Problem habe, versuche ich zuerst, die Ursache zu verstehen und dann eine passende Lösung zu finden.\n\nAußerdem arbeite ich selbstständig, lerne gerne neue Technologien und kann mich relativ schnell in bestehende Projekte einarbeiten. Ich lege auch viel Wert auf sauberen und wartbaren Code.',
                ],
                [
                    'Was sind Ihre Schwächen?',
                    'Manchmal beschäftige ich mich zu lange mit technischen Details. Ich habe aber gelernt, stärker auf Prioritäten und den zeitlichen Rahmen zu achten.',
                    'Manchmal beschäftige ich mich zu lange mit technischen Details, weil ich eine gute Lösung finden möchte. Ich habe aber gelernt, stärker auf Prioritäten und den zeitlichen Rahmen zu achten.',
                ],
                [
                    'Arbeiten Sie lieber allein oder im Team?',
                    'Ich kann selbstständig und konzentriert arbeiten, finde aber den Austausch im Team besonders bei Architektur- und Problemlösungsfragen wichtig.',
                    'Ich kann beides gut. Bei technischen Aufgaben arbeite ich gerne selbstständig und konzentriert. Gleichzeitig finde ich den Austausch im Team sehr wichtig, besonders wenn es um Architektur, Problemlösungen oder neue Anforderungen geht.',
                ],
                [
                    'Wie gehen Sie mit Stress oder engen Deadlines um?',
                    'Ich priorisiere die Aufgaben, konzentriere mich auf das Wesentliche und spreche mögliche Verzögerungen frühzeitig im Team an.',
                    'Ich versuche zuerst, die Aufgaben zu priorisieren und mich auf die wichtigsten Punkte zu konzentrieren. Wenn etwas nicht rechtzeitig fertig werden kann, spreche ich das frühzeitig im Team an. Mir ist wichtig, auch unter Zeitdruck auf die Qualität zu achten.',
                ],
                [
                    'Was machen Sie, wenn Sie einen Fehler in einer bestehenden Anwendung finden?',
                    'Ich reproduziere den Fehler, analysiere die Ursache und die betroffenen Bereiche und sichere die Korrektur möglichst mit einem Test ab.',
                    'Zuerst versuche ich, den Fehler zu reproduzieren und die Ursache zu finden. Danach prüfe ich, welche Bereiche betroffen sein könnten. Wenn möglich, schreibe ich einen Test, der das Problem abdeckt, bevor ich die eigentliche Korrektur umsetze.',
                ],
            ],
        ];

        foreach ($examples as $name => $posts) {
            $category = Category::firstOrCreate(['name' => $name]);

            foreach ($posts as [$title, $description, $detail]) {
                $category->posts()->updateOrCreate(
                    ['title' => $title],
                    ['description' => $description, 'description_detail' => $detail]
                );
            }

            if ($name === 'General') {
                $category->posts()->whereNotIn('title', array_column($posts, 0))->delete();
            }

            if ($name === 'Others') {
                $category->posts()->whereIn('title', ['Useful resources', 'Open discussion'])->delete();
            }
        }
    }
}
