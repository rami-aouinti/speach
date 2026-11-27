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
                [
                    'Laravel',
                    '<p>Ich habe mit <strong>Laravel</strong> bei Wizmo GmbH an individuellen Webanwendungen und Backend-Funktionen gearbeitet. Wir brauchten dort eine flexible Grundlage, um fachliche Anforderungen schnell umzusetzen und externe Schnittstellen anzubinden. Ich habe Controller, Services, Datenbankzugriffe und API-Funktionen entwickelt und bestehende Anwendungen erweitert. In meinen aktuellen Praxisprojekten nutze ich Laravel 12 mit PHP 8.4, um beispielsweise Order- und Warehouse-Prozesse an ein ERP-System anzubinden. Die eingesetzte Laravel-Version habe ich jeweils an den Projektzeitraum angepasst.</p>',
                    ''
                ],
                [
                    'MySQL',
                    '<p>Ich habe mit <strong>MySQL</strong> in Web- und E-Commerce-Anwendungen gearbeitet, wenn strukturierte Geschäfts- und Shopdaten zuverlässig gespeichert und verarbeitet werden mussten. Dazu gehörten relationale Datenmodelle, SQL-Abfragen und die Arbeit mit Datenbankzugriffen aus PHP-Anwendungen. Bei der Entwicklung habe ich darauf geachtet, Abfragen nachvollziehbar zu halten und Daten konsistent zu verarbeiten. In neueren Praxisprojekten verwende ich PostgreSQL 17; die konkreten MySQL-Versionen der früheren Kundenprojekte sind nicht dokumentiert und werden deshalb nicht pauschal festgelegt.</p>',
                    ''
                ],
                [
                    'Symfony',
                    '<p>Ich habe mit <strong>Symfony</strong> in mehreren Projekten gearbeitet. Bei Hinke habe ich Symfony für individuelle Backend-Anwendungen und Schnittstellen rund um den E-Commerce-Shop Pfundskerl eingesetzt. Bei TK Deutschland habe ich anschließend mit <strong>Symfony 6</strong> REST-basierte Microservices entwickelt und externe Plattformen angebunden. Dabei ging es darum, Geschäftslogik sauber zu strukturieren, APIs stabil bereitzustellen und die Services wartbar zu halten.</p>',
                    ''
                ],
                [
                    'Microservices und REST APIs',
                    '<p>Ich habe mit <strong>Microservices und REST APIs</strong> vor allem bei TK Deutschland gearbeitet. Dort mussten verschiedene interne Anwendungen und externe Plattformen zuverlässig miteinander kommunizieren. Deshalb habe ich mit Symfony 6 eigenständige Backend-Services und REST-Schnittstellen entwickelt, Request- und Response-Daten strukturiert verarbeitet und Integrationen unter anderem mit Microsoft Graph und Intune umgesetzt. Ein wichtiger Teil der Arbeit war, Services möglichst klar voneinander zu entkoppeln und Fehler an Systemgrenzen kontrolliert zu behandeln.</p>',
                    ''
                ],
                [
                    'Authentication und Sicherheit',
                    '<p>Ich habe mich mit <strong>Authentifizierung und API-Sicherheit</strong> insbesondere bei TK Deutschland beschäftigt, weil Backend-Services auf interne und externe Plattformen zugreifen mussten und dabei Identitäten sowie Berechtigungen berücksichtigt werden sollten. Im Integrationskontext habe ich mit Microsoft Entra ID und Microsoft Graph gearbeitet und Authentifizierungs- sowie Autorisierungsabläufe in die Backend-Kommunikation einbezogen. Bei API-Entwicklung achte ich außerdem auf Eingabevalidierung, kontrollierte Fehlerantworten und darauf, dass geschützte Funktionen nicht ohne die erforderlichen Berechtigungen erreichbar sind.</p>',
                    ''
                ],
                [
                    'Performance und Optimierung',
                    '<p>Ich habe mich mit <strong>Performance-Optimierung</strong> in unterschiedlichen Backend- und E-Commerce-Projekten beschäftigt. Bei Hinke und Pfundskerl war es wichtig, Shop-Funktionen und Datenzugriffe so umzusetzen, dass bestehende Abläufe zuverlässig und performant bleiben. Bei TK Deutschland habe ich in einer Microservice-Umgebung mit Redis, Elasticsearch und RoadRunner gearbeitet. Je nach Anwendungsfall ging es darum, unnötige Datenbankzugriffe zu vermeiden, wiederkehrende Zugriffe effizienter zu gestalten und die Verarbeitungslast sinnvoll zu verteilen.</p>',
                    ''
                ],
                [
                    'Temporal und Workflow-Orchestrierung',
                    '<p>Ich habe <strong>Temporal</strong> bei TK Deutschland im Umfeld verteilter Backend-Prozesse eingesetzt. Einige Abläufe bestanden aus mehreren Schritten und Systemaufrufen und sollten auch dann zuverlässig weiterlaufen, wenn ein externer Dienst vorübergehend nicht erreichbar war. Temporal half dabei, länger laufende Workflows zu orchestrieren und deren Zustand nachvollziehbar zu verwalten. Dadurch konnten Prozessschritte robuster koordiniert werden, statt die gesamte Ablaufsteuerung in einem einzelnen synchronen Request abzubilden.</p>',
                    ''
                ],
                [
                    'Logging und Monitoring',
                    '<p>Ich habe <strong>Logging und Monitoring</strong> in meinen Projekten genutzt, um Fehler schneller zu finden und den technischen Zustand von Anwendungen nachvollziehen zu können. Bei Hinke kamen unter anderem Monolog und Sentry im Anwendungskontext zum Einsatz. Bei TK Deutschland habe ich außerdem mit Prometheus und Grafana gearbeitet, um Metriken und das Laufzeitverhalten der Services sichtbar zu machen. Gerade bei Microservices war es wichtig, Fehler systemübergreifend einzugrenzen und Probleme nicht nur anhand einer einzelnen API-Antwort zu analysieren.</p>',
                    ''
                ],
                [
                    'CI/CD und Deployment',
                    '<p>Ich habe mit <strong>CI/CD-Prozessen</strong> bei TK Deutschland gearbeitet, weil die Symfony-Microservices reproduzierbar gebaut, getestet und in die Azure-Umgebung ausgeliefert werden mussten. Die Anwendungen wurden mit Docker containerisiert und auf Kubernetes (AKS) betrieben. In den Delivery-Prozessen spielten automatisierte Tests, Build- und Deployment-Schritte sowie eine nachvollziehbare Auslieferung eine wichtige Rolle. Dadurch konnten Änderungen kontrollierter und konsistenter in die jeweiligen Umgebungen gebracht werden.</p>',
                    ''
                ],
            ],
            'Project' => [
                [
                    'Raucon GmbH – Plattform und Zoom-Integration',
                    '<p><strong>Zeitraum:</strong> 08/2018 – 04/2021 · Wizmo GmbH</p><h3>Ausgangssituation und Problem</h3><p>Für Raucon sollte eine zentrale Webplattform entstehen, über die Informationen und digitale Abläufe gebündelt und Online-Termine einfacher organisiert werden konnten. Eine wichtige Herausforderung war die zuverlässige Einbindung externer Dienste in die bestehende Anwendung.</p><h3>Umsetzung</h3><p>Ich war an der Entwicklung der Webplattform und der Integration der Zoom-Schnittstelle beteiligt. Dabei wurden Backend-Funktionen und die Benutzeroberfläche umgesetzt und externe API-Aufrufe in die Anwendung eingebunden.</p><h3>Technologien</h3><p><strong>PHP, Laravel, Vue.js, Zoom API, REST</strong>. Die eingesetzten Framework-Versionen richteten sich nach dem damaligen Projektstand (2018–2021).</p>',
                    ''
                ],
                [
                    'First Medical – B2B-Shop und ERP-Anbindung',
                    '<p><strong>Zeitraum:</strong> 08/2018 – 04/2021 · Wizmo GmbH</p><h3>Ausgangssituation und Problem</h3><p>First Medical benötigte E-Commerce-Funktionen für Geschäftskunden. Produktinformationen, Verfügbarkeiten und Bestellprozesse mussten mit externen Warenwirtschafts- beziehungsweise ERP-Abläufen zusammenspielen. Die Herausforderung bestand darin, Shop-Prozesse und externe Daten konsistent zu halten.</p><h3>Umsetzung</h3><p>Ich entwickelte und erweiterte Shopware-Funktionen und Plugins für die benötigten B2B-Prozesse. Dazu gehörten individuelle Anpassungen im Shop sowie die technische Anbindung und Verarbeitung externer Daten und Bestellinformationen.</p><h3>Technologien</h3><p><strong>PHP, Shopware 5, Shopware 6, Shopware-Plugins, REST/API-Integrationen</strong>. Die Shopware-Version kam abhängig vom jeweiligen Projektstand zum Einsatz.</p>',
                    ''
                ],
                [
                    'Pfundskerl – B2C-E-Commerce und Shop-Weiterentwicklung',
                    '<p><strong>Zeitraum:</strong> 11/2021 – 01/2024 · Hinke GmbH</p><h3>Ausgangssituation und Problem</h3><p>Der B2C-Online-Shop Pfundskerl musste kontinuierlich erweitert werden. Neben neuen Shop-Funktionen waren interne Abläufe, Datenübertragung und die Nachverfolgbarkeit von Bestellungen relevant. Besonders wichtig war die zuverlässige Synchronisation zwischen dem Shop und dem Warenwirtschaftssystem pixi.</p><h3>Umsetzung</h3><p>Ich entwickelte neue Funktionen und Erweiterungen für den Online-Shop auf Basis von OXID eShop und setzte zusätzliche Symfony-Anwendungen und Schnittstellen um. Ein Schwerpunkt war ein Synchronisationsdienst zwischen Shop und pixi, damit Bestell- und Prozessdaten systemübergreifend verarbeitet werden konnten. Außerdem arbeitete ich an einer internen Mitarbeiter-Anwendung sowie an der GA4-Integration über den DataLayer.</p><h3>Technologien</h3><p><strong>PHP, OXID eShop, Symfony, REST/APIs, pixi, Monolog, Sentry, Grafana, Google Analytics 4 (DataLayer)</strong>. Eingesetzte Framework- und Shop-Versionen entsprachen dem Projektstand 2021–2024.</p>',
                    ''
                ],
                [
                    'Order Management – Laravel-Anbindung an ein ERP-System',
                    '<p><strong>Zeitraum:</strong> 2026 · Eigenständiges Praxisprojekt</p><h3>Ausgangssituation und Problem</h3><p>Bestellungen entstehen häufig in unterschiedlichen Systemen. Ohne eine zentrale Schnittstelle müssen Auftragsdaten mehrfach gepflegt werden; Statusänderungen und Rückmeldungen aus dem ERP sind nicht immer unmittelbar im operativen System sichtbar.</p><h3>Umsetzung</h3><p>Konzeption und Entwicklung eines Laravel-basierten Order-Management-Services, der Bestellungen über APIs mit einem ERP-System austauscht. Der Service bildet den Lebenszyklus einer Bestellung ab, verarbeitet Statusänderungen und stellt eine nachvollziehbare Kommunikation zwischen den beteiligten Systemen sicher.</p><h3>Technologien</h3><p><strong>PHP 8.4, Laravel 12, REST APIs, PostgreSQL 17, Docker</strong>. Fokus auf klare Schnittstellen, Validierung, Fehlerbehandlung und wartbare Service-Strukturen.</p>',
                    ''
                ],
                [
                    'Warehouse Management – Laravel-Integration für Lagerbestände',
                    '<p><strong>Zeitraum:</strong> 2026 · Eigenständiges Praxisprojekt</p><h3>Ausgangssituation und Problem</h3><p>Lagerbestände und Warenbewegungen müssen zwischen Lagerverwaltung und ERP konsistent bleiben. Verzögerte oder doppelte Übertragungen können zu falschen Bestandsanzeigen, fehlerhaften Kommissionierungen und unzuverlässigen Verfügbarkeiten führen.</p><h3>Umsetzung</h3><p>Entwicklung eines Laravel-Services zur Integration von Lagerprozessen mit einem ERP-System. Der Service verarbeitet Bestandsänderungen und Warenbewegungen, synchronisiert relevante Informationen über APIs und berücksichtigt eine robuste Verarbeitung wiederholter Nachrichten, damit Daten nicht unkontrolliert doppelt übernommen werden.</p><h3>Technologien</h3><p><strong>PHP 8.4, Laravel 12, REST APIs, PostgreSQL 17, Docker</strong>. Schwerpunkte: Datenkonsistenz, Idempotenz, strukturierte Fehlerbehandlung und nachvollziehbare Prozessabläufe.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Symfony-Microservices und API-Integration',
                    '<p><strong>Zeitraum:</strong> 02/2024 – 02/2026 · TK Deutschland</p><h3>Ausgangssituation und Problem</h3><p>Unterschiedliche interne und externe Plattformen mussten sicher und zuverlässig miteinander kommunizieren. Die Herausforderung lag in klaren API-Verträgen, einheitlicher Fehlerbehandlung, Authentifizierung und der stabilen Verarbeitung verteilter Geschäftsprozesse.</p><h3>Umsetzung</h3><p>Entwicklung und Erweiterung von REST-basierten Backend-Microservices. Dazu gehörten wiederverwendbare Request- und Response-DTOs, Validierung, Serialisierung, zentrale Fehlerbehandlung sowie die Integration externer Plattformen. Die Services wurden containerisiert betrieben und über CI/CD bereitgestellt.</p><h3>Technologien</h3><p><strong>PHP, Symfony 6, REST, DTOs, JWT, Docker, Azure, Kubernetes (AKS), PHPUnit, Xdebug</strong>.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Identity- und Device-Integration',
                    '<p><strong>Zeitraum:</strong> 02/2024 – 02/2026 · TK Deutschland</p><h3>Ausgangssituation und Problem</h3><p>Benutzer- und Geräteinformationen lagen in externen Microsoft-Diensten. Anwendungen benötigten einen kontrollierten Zugriff auf diese Informationen, ohne Authentifizierungs- und Integrationslogik mehrfach und unterschiedlich zu implementieren.</p><h3>Umsetzung</h3><p>Entwicklung von Backend-Integrationen für Microsoft-Dienste. Die Services kommunizierten über APIs mit Microsoft Graph und Intune und kapselten externe Zugriffe in wiederverwendbaren Komponenten. Authentifizierung, Berechtigungen und Fehlerfälle wurden in den Integrationsablauf einbezogen.</p><h3>Technologien</h3><p><strong>PHP, Symfony 6, Microsoft Graph API, Microsoft Intune, Microsoft Entra ID, REST, Docker, Azure, PHPUnit</strong>.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Event- und Workflow-Microservice',
                    '<p><strong>Zeitraum:</strong> 02/2024 – 02/2026 · TK Deutschland</p><h3>Ausgangssituation und Problem</h3><p>Verteilte Anwendungen müssen auf Ereignisse reagieren können, ohne direkt voneinander abhängig zu sein. Synchrone Verarbeitung allein reicht bei längeren Abläufen, Wiederholungen oder vorübergehend nicht verfügbaren Drittsystemen häufig nicht aus.</p><h3>Umsetzung</h3><p>Arbeit an ereignisgesteuerten Integrations- und Workflow-Abläufen. Nachrichten wurden asynchron verarbeitet; länger laufende Prozesse konnten orchestriert und Fehler beziehungsweise Wiederholungen kontrolliert behandelt werden. Dadurch wurden Services entkoppelt und Integrationen robuster gestaltet.</p><h3>Technologien</h3><p><strong>PHP, Symfony 6, RabbitMQ, Temporal, Redis, REST, Docker, Azure, Kubernetes (AKS)</strong>.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Interner KI-Assistent mit Laravel und React',
                    '<p><strong>Zeitraum:</strong> 02/2024 – 02/2026 · TK Deutschland</p><h3>Ausgangssituation und Problem</h3><p>Wissen und Informationen aus internen Quellen sollten für Mitarbeitende einfacher zugänglich werden. Eine reine Chat-Oberfläche reicht dafür nicht aus: Es braucht eine benutzerfreundliche Oberfläche und ein Backend, das Anfragen verarbeitet und interne beziehungsweise angebundene Dienste kontrolliert integriert.</p><h3>Umsetzung</h3><p>Mitwirkung an einem internen KI-Assistenten. Ich arbeitete an der Anwendungs- und Integrationsseite mit und unterstützte die Verbindung zwischen Frontend, Backend und den benötigten Diensten. Der Schwerpunkt lag auf einer klaren API-Kommunikation und einer praxistauglichen Einbettung des Assistenten in bestehende Arbeitsabläufe.</p><h3>Technologien</h3><p><strong>PHP, Laravel, React, REST APIs, Docker</strong>. Die konkreten Framework-Unterversionen sind hier bewusst nicht festgeschrieben.</p>',
                    ''
                ],
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
                    'DIGOOH verbindet Digitalisierung mit einem konkreten Produkt und einem spannenden Geschäftsmodell. Die PHP-Stelle passt zu meiner Erfahrung mit Laravel, Symfony, APIs und der Weiterentwicklung bestehender Anwendungen.',
                    'Ich habe mich vor meiner Bewerbung ein bisschen über DIGOOH informiert. Was ich interessant finde, ist, dass DIGOOH einen eher klassischen Bereich – die Außenwerbung – durch digitale Technologien weiterentwickelt. Das Unternehmen betreibt digitale Werbedisplays, zum Beispiel an Supermärkten und anderen stark frequentierten Standorten. Über diese Screens können lokale, regionale und nationale Unternehmen ihre Werbung flexibel ausspielen. Besonders spannend finde ich dabei die Verbindung von Technologie, Daten, Standorten und konkreten Geschäftsprozessen.\n\nAuch die ausgeschriebene Stelle passt sehr gut zu meinem Profil. Es geht nicht nur darum, einzelne Features zu programmieren, sondern bestehende Anwendungen weiterzuentwickeln, neue Funktionen von der Konzeption bis zur Umsetzung zu begleiten und externe Services und APIs zu integrieren. Genau solche Aufgaben kenne ich aus meinen bisherigen Projekten. Ich habe mehr als acht Jahre Erfahrung mit PHP und unter anderem mit Laravel und Symfony gearbeitet. Bei Wizmo habe ich Laravel-basierte Anwendungen entwickelt, bei Hinke E-Commerce-Anwendungen und Symfony-Schnittstellen erweitert und bei TK Deutschland mit Symfony 6 REST-APIs und Backend-Microservices umgesetzt.\n\nDazu kommt meine Erfahrung mit relationalen Datenbanken, Docker, automatisierten Tests und der Zusammenarbeit mit fachlichen Ansprechpartnern. Ich finde es wichtig, nicht einfach nur Anforderungen umzusetzen, sondern zuerst zu verstehen, wie die Anwender arbeiten und welches Problem gelöst werden soll. Deshalb spricht mich auch der Fokus von DIGOOH auf benutzerfreundliche und leistungsfähige Anwendungen an. Ich sehe hier eine gute Möglichkeit, meine bisherige Erfahrung einzubringen und gleichzeitig die digitale Weiterentwicklung eines interessanten Unternehmens mitzugestalten.',
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
                if ($name === 'Others') {
                    $description = $detail !== '' ? $detail : $description;
                    $detail = '';
                }

                $category->posts()->updateOrCreate(
                    ['title' => $title],
                    ['description' => $description, 'description_detail' => $detail]
                );
            }

            if ($name === 'General') {
                $category->posts()->whereNotIn('title', array_column($posts, 0))->delete();
            }

            if ($name === 'Project') {
                $category->posts()->whereNotIn('title', array_column($posts, 0))->delete();
            }

            if ($name === 'Others') {
                $category->posts()->whereIn('title', ['Useful resources', 'Open discussion'])->delete();
            }
        }
    }
}
