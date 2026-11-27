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
                    'Mein Name ist Rami Aouinti. Ich bin PHP-Backend-Entwickler und habe mehr als acht Jahre Erfahrung in der Entwicklung von Webanwendungen und Backend-Systemen.',
                    'Mein Name ist Rami Aouinti. Ich bin PHP-Backend-Entwickler und habe etwas mehr als acht Jahre Berufserfahrung in der Softwareentwicklung, insbesondere mit PHP, Symfony und verschiedenen E-Commerce-Systemen.\n\nMein Studium habe ich am INSAT in Tunis im Bereich Computernetzwerke und Telekommunikation absolviert. Im Jahr 2014 bin ich nach Deutschland gekommen. Anschließend habe ich Deutsch gelernt und die DSH-Prüfung auf C1-Niveau bestanden. Von 2015 bis 2018 habe ich an der Beuth Hochschule für Technik Berlin meinen Master im Bereich Telekommunikations- und Informationstechnik abgeschlossen.\n\nSeit 2018 arbeite ich beruflich als Softwareentwickler. In dieser Zeit habe ich in unterschiedlichen Unternehmen an Webanwendungen, Online-Shops, APIs und komplexen Backend-Systemen gearbeitet. Mein Schwerpunkt liegt auf PHP, Symfony, sauberen Softwarearchitekturen und der Integration unterschiedlicher Systeme. Dabei ist mir wichtig, Lösungen zu entwickeln, die zuverlässig, wartbar und langfristig erweiterbar sind.'
                ],
                [
                    'Erfahrung',
                    'Von E-Commerce-Anwendungen und Shopware-Plugins bis zu Symfony-Microservices, REST-APIs und Cloud-Infrastrukturen: ein Überblick über meine bisherigen Aufgaben.',
                    'Bei der Wizmo GmbH war ich von August 2018 bis April 2021 als Junior Full-Stack-Entwickler tätig. Ich habe an verschiedenen Web- und E-Commerce-Projekten mitgearbeitet. Zu Beginn habe ich vor allem mit Zend Framework und Angular gearbeitet. Später kamen Laravel und Vue.js stärker zum Einsatz. Dabei habe ich bestehende Anwendungen erweitert, neue Funktionen umgesetzt und an der Weiterentwicklung von Shopware-Projekten gearbeitet. Ein Teil meiner Aufgaben war die Entwicklung und Anpassung von Shopware-Plugins sowie die Umsetzung individueller Anforderungen im Backend und Frontend. Wir haben außerdem mit Ansätzen wie Acceptance Test-Driven Development (ATDD) und Pair Programming gearbeitet. Dadurch habe ich früh gelernt, Anforderungen gemeinsam zu verstehen, Änderungen durch Tests abzusichern und mich in bestehende Codebasen einzuarbeiten.\n\nBei der Hinke GmbH war ich von November 2021 bis Januar 2024 als Senior Full-Stack-E-Commerce-Entwickler tätig. Mein Schwerpunkt lag auf B2C-E-Commerce, insbesondere auf dem Online-Shop Pfundskerl. Ich habe hauptsächlich mit OXID eShop und Symfony-Anwendungen gearbeitet. Zu meinen Aufgaben gehörten die Entwicklung neuer Shop-Funktionen, die Anpassung und Erweiterung bestehender Module, die Umsetzung von Schnittstellen sowie die Wartung und Weiterentwicklung der Anwendungen. Dabei habe ich sowohl Backend- als auch Frontend-Themen übernommen und eng mit den fachlichen Ansprechpartnern zusammengearbeitet. Da Anforderungen häufig direkt aus dem operativen Geschäft kamen, war es wichtig, diese gemeinsam zu klären und in verständliche technische Lösungen umzusetzen.\n\nBei TK Deutschland war ich von Februar 2024 bis Februar 2026 als Backend-Entwickler tätig. Dort lag mein Schwerpunkt auf PHP und Symfony 6 sowie auf der Entwicklung von REST-basierten Microservices. Ich habe Backend-Services und APIs entwickelt, bestehende Schnittstellen erweitert und externe Systeme und Dienste angebunden. Dazu gehörten unter anderem Integrationen mit Microsoft Graph und Intune sowie weitere externe Plattformen und Kommunikationsdienste. Die Services liefen containerisiert mit Docker in einer Azure- und Kubernetes-Umgebung (AKS); außerdem war ich in CI/CD-Prozesse und die technische Betreuung der Anwendungen eingebunden. Je nach Anwendungsfall kamen Technologien wie RabbitMQ, Redis, Elasticsearch, RoadRunner und Temporal zum Einsatz. Für Tests und Debugging habe ich unter anderem PHPUnit und Xdebug verwendet. Die Überwachung der Anwendungen erfolgte mit Tools wie Prometheus und Grafana. Besonders wichtig waren dabei eine zuverlässige Kommunikation zwischen den Services, eine gute Fehleranalyse und eine stabile Bereitstellung der Backend-Anwendungen.'
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
        }
    }
}
