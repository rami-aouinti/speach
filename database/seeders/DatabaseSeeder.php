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
                    '<p>Bei der <strong>Wizmo GmbH</strong> habe ich an einem Projekt für Raucon mitgearbeitet. Ziel war es, eine zentrale Webplattform bereitzustellen und Online-Termine einfacher zu organisieren. Dafür sollte die bestehende Anwendung um die Möglichkeit erweitert werden, Videokonferenzen direkt über Zoom anzubieten.</p><p>Meine Aufgabe war es, an den Backend-Funktionen und an der Integration der Zoom-API mitzuarbeiten. Wir mussten dafür sorgen, dass unsere Plattform die benötigten Informationen korrekt an Zoom übergibt und Rückmeldungen zuverlässig verarbeitet. So konnten die Nutzer ihre Online-Termine direkt über die Plattform organisieren.</p><p>Für die Umsetzung haben wir mit <strong>PHP, Laravel, Vue.js und der Zoom-API</strong> gearbeitet. Besonders interessant fand ich dabei die Verbindung einer bestehenden Webanwendung mit einem externen Dienst und die Abstimmung zwischen Frontend, Backend und API.</p>',
                    ''
                ],
                [
                    'First Medical – B2B-Shop und ERP-Anbindung',
                    '<p>Bei <strong>First Medical</strong> arbeite ich an der Weiterentwicklung der E-Commerce- und Backend-Systeme. Im Mittelpunkt steht ein B2B-Shop, über den Geschäftskunden Produkte bestellen und relevante Informationen zu Artikeln und Verfügbarkeiten erhalten. Dafür müssen Produktdaten, Lagerbestände und Bestellungen zuverlässig mit den internen Warenwirtschafts- und ERP-Prozessen zusammenspielen.</p><p>Eine besondere Herausforderung ist, dass Informationen aus verschiedenen Systemen konsistent bleiben und Änderungen korrekt übertragen werden. Ich entwickle und erweitere dafür Shop-Funktionen und Backend-Integrationen und beschäftige mich mit der Anbindung von Systemen wie <strong>pixi, Akeneo und Microsoft Graph</strong>. Dabei geht es nicht nur um den Datenaustausch, sondern auch darum, die Abläufe für die Anwender im Tagesgeschäft zuverlässig zu gestalten.</p><p>Technisch arbeite ich dabei unter anderem mit <strong>PHP, Shopware, Symfony und APIs</strong>. Ich achte besonders auf stabile Schnittstellen, nachvollziehbare Fehlerbehandlung und eine saubere Integration in die vorhandenen Prozesse.</p>',
                    ''
                ],
                [
                    'Pfundskerl – B2C-E-Commerce und Shop-Weiterentwicklung',
                    '<p>Bei der <strong>Hinke GmbH</strong> habe ich am B2C-Online-Shop <strong>Pfundskerl</strong> gearbeitet. Der Shop wurde kontinuierlich weiterentwickelt, weil immer wieder neue Anforderungen aus dem E-Commerce und aus den internen Geschäftsprozessen dazugekommen sind. Neben neuen Funktionen im Shop mussten auch die Daten und Abläufe mit dem Warenwirtschaftssystem pixi zuverlässig synchronisiert werden.</p><p>Ich habe bestehende Shop-Funktionen erweitert, individuelle Backend-Anwendungen mit Symfony umgesetzt und an der Schnittstelle zwischen dem Shop und pixi gearbeitet. Dabei war es wichtig, Bestell- und Prozessdaten korrekt zwischen den Systemen auszutauschen, damit die Mitarbeiter mit aktuellen Informationen arbeiten konnten. Zusätzlich war ich an einer internen Mitarbeiter-Anwendung und an der GA4-Integration über den DataLayer beteiligt.</p><p>Technisch haben wir vor allem mit <strong>PHP, OXID eShop, Symfony, REST-APIs und pixi</strong> gearbeitet. Für Logging und Fehleranalyse kamen außerdem <strong>Monolog und Sentry</strong> zum Einsatz. Das Projekt hat mir gezeigt, wie wichtig zuverlässige Integrationen für den täglichen Betrieb eines Online-Shops sind.</p>',
                    ''
                ],
                [
                    'Order Management – Laravel-Anbindung an ein ERP-System',
                    '<p>In meinem eigenen Praxisprojekt habe ich ein <strong>Order-Management-System mit Laravel</strong> entwickelt, das Bestellungen mit einem ERP-System austauschen kann. Ausgangspunkt war ein typisches Problem aus dem Unternehmensalltag: Bestellungen werden in unterschiedlichen Anwendungen angelegt, während Statusänderungen und Rückmeldungen auch im jeweils anderen System aktuell sein müssen.</p><p>Ich wollte deshalb einen zentralen Backend-Service schaffen, der diesen Austausch über klar definierte APIs übernimmt. Dafür habe ich die Bestellabläufe modelliert, REST-Endpunkte entwickelt und die Verarbeitung der Bestelldaten sowie der Statusänderungen umgesetzt. Außerdem habe ich Validierungen und eine strukturierte Fehlerbehandlung eingebaut, damit fehlerhafte oder unvollständige Daten kontrolliert behandelt werden.</p><p>Verwendet habe ich <strong>PHP 8.4, Laravel 12, PostgreSQL 17, REST APIs und Docker</strong>. Bei der Entwicklung habe ich besonders auf eine klare Trennung der Geschäftslogik und auf wartbare Schnittstellen geachtet.</p>',
                    ''
                ],
                [
                    'Warehouse Management – Laravel-Integration für Lagerbestände',
                    '<p>Als weiteres Praxisprojekt habe ich einen <strong>Warehouse-Management-Service mit Laravel</strong> umgesetzt. Dabei ging es um die Frage, wie Lagerbestände und Warenbewegungen zuverlässig zwischen einer Lagerverwaltung und einem ERP-System synchronisiert werden können. Gerade bei solchen Prozessen ist es wichtig, dass beide Systeme denselben aktuellen Bestand anzeigen.</p><p>Eine besondere Herausforderung sind doppelt zugestellte oder verspätete Nachrichten. Wenn eine Warenbewegung mehrfach übertragen wird, darf der Bestand nicht versehentlich mehrfach verändert werden. Deshalb habe ich einen Backend-Service entwickelt, der Bestandsänderungen und Warenbewegungen verarbeitet und die Informationen über APIs mit dem ERP-System austauscht. Ein wichtiger Teil der Umsetzung war die idempotente Verarbeitung, damit wiederholte Nachrichten keine doppelten Buchungen auslösen.</p><p>Technisch basiert das Projekt auf <strong>PHP 8.4, Laravel 12, PostgreSQL 17, REST APIs und Docker</strong>. Außerdem habe ich auf Datenkonsistenz, nachvollziehbare Fehlerbehandlung und klar definierte Prozessabläufe geachtet.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Symfony-Microservices und API-Integration',
                    '<p>Bei <strong>TK Deutschland</strong> habe ich als Backend-Entwickler an einer Microservice-Architektur gearbeitet. Verschiedene interne Anwendungen und externe Plattformen mussten miteinander kommunizieren. Dafür brauchten wir klar definierte und stabile Schnittstellen, über die Daten zuverlässig ausgetauscht werden konnten.</p><p>Ich habe mit <strong>PHP und Symfony 6</strong> REST-basierte Backend-Services entwickelt und bestehende APIs erweitert. Zu meinen Aufgaben gehörten unter anderem Request- und Response-Strukturen, DTOs, Validierungen und die Fehlerbehandlung. Außerdem habe ich externe Systeme angebunden und darauf geachtet, dass die Kommunikation zwischen den Services zuverlässig funktioniert.</p><p>Die Anwendungen liefen containerisiert mit <strong>Docker in Azure und Kubernetes (AKS)</strong>. Für automatisierte Tests haben wir unter anderem <strong>PHPUnit</strong> verwendet. Mein Schwerpunkt lag darauf, die Services wartbar zu halten, klare API-Verträge zu schaffen und eine zuverlässige Kommunikation zwischen den verschiedenen Systemen sicherzustellen.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Identity- und Device-Integration',
                    '<p>Ein weiterer Teil meiner Arbeit bei <strong>TK Deutschland</strong> war die Integration von Identitäts- und Geräteinformationen aus dem Microsoft-Umfeld. Unsere Anwendungen mussten beispielsweise auf Benutzer- und Gerätedaten zugreifen können, die in externen Microsoft-Diensten verwaltet wurden.</p><p>Dafür habe ich Backend-Integrationen entwickelt, die über <strong>Microsoft Graph und Intune</strong> mit diesen Diensten kommunizieren. Die Herausforderung bestand darin, die externen Zugriffe sauber in unsere Symfony-Services einzubinden und dabei Authentifizierung, Berechtigungen sowie mögliche Fehler bei API-Aufrufen zu berücksichtigen. Ich habe die Integrationslogik im Backend umgesetzt und darauf geachtet, dass sie wiederverwendbar und nachvollziehbar bleibt.</p><p>Zum Einsatz kamen <strong>PHP, Symfony 6, Microsoft Graph API, Microsoft Intune, Microsoft Entra ID, REST und Docker</strong>. So konnten die Anwendungen benötigte Informationen aus den Microsoft-Diensten kontrolliert abrufen und in ihren eigenen Geschäftsprozessen verwenden.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Event- und Workflow-Microservice',
                    '<p>Bei <strong>TK Deutschland</strong> gab es Prozesse, die nicht vollständig innerhalb eines einzelnen API-Aufrufs erledigt werden konnten. Mehrere Services und externe Systeme mussten nacheinander oder ereignisgesteuert miteinander arbeiten. Eine rein synchrone Kommunikation wäre dafür zu abhängig von der unmittelbaren Verfügbarkeit aller beteiligten Systeme gewesen.</p><p>Deshalb haben wir asynchrone Nachrichtenverarbeitung und Workflow-Orchestrierung eingesetzt. Ich habe an der Umsetzung und Integration dieser Backend-Abläufe mitgearbeitet: Nachrichten wurden über <strong>RabbitMQ</strong> verarbeitet und länger laufende Prozesse mit <strong>Temporal</strong> koordiniert. Ergänzend kamen je nach Anwendungsfall Redis und REST-Schnittstellen zum Einsatz. Dadurch konnten einzelne Prozessschritte voneinander entkoppelt und Wiederholungen kontrolliert behandelt werden.</p><p>Entwickelt haben wir die Services mit <strong>PHP und Symfony 6</strong> und betrieben sie containerisiert mit Docker in Azure und Kubernetes. Das Ziel war, die Kommunikation zwischen den Systemen robuster zu gestalten und auch bei vorübergehenden Fehlern einen nachvollziehbaren Prozessablauf sicherzustellen.</p>',
                    ''
                ],
                [
                    'TK Deutschland – Interner KI-Assistent mit Laravel und React',
                    '<p>Bei <strong>TK Deutschland</strong> war ich auch an einem internen KI-Assistenten beteiligt. Die Idee war, Mitarbeitenden den Zugang zu Informationen und Wissen zu erleichtern und dafür eine einfache, zentrale Anwendung bereitzustellen. Die Informationen sollten über eine benutzerfreundliche Oberfläche zugänglich sein, statt dass Mitarbeitende lange an verschiedenen Stellen suchen müssen.</p><p>Dafür brauchte es nicht nur eine Chat-Oberfläche, sondern auch ein Backend, das die Anfragen verarbeitet und die Kommunikation mit den angebundenen Diensten übernimmt. Ich habe an der Anwendungs- und Integrationsseite mitgearbeitet und mich insbesondere mit der Verbindung zwischen Frontend und Backend sowie den benötigten API-Schnittstellen beschäftigt.</p><p>Im Projekt kamen <strong>Laravel, React, PHP, REST APIs und Docker</strong> zum Einsatz. Wichtig war dabei, die einzelnen Komponenten sauber miteinander zu verbinden und die Anwendung so aufzubauen, dass sie später um weitere Funktionen und Integrationen erweitert werden kann.</p>',
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
                    'Warum haben Sie Wizmo verlassen und warum sind Sie zu Hinke gewechselt?',
                    'Nach meiner Zeit bei Wizmo wollte ich den nächsten beruflichen Schritt machen. Bei Hinke hatte ich die Möglichkeit, mehr Verantwortung zu übernehmen und an komplexeren E-Commerce- und Backend-Projekten zu arbeiten.',
                    '<p>Bei <strong>Wizmo</strong> habe ich meine ersten wichtigen Berufserfahrungen als Softwareentwickler gesammelt. Ich habe an Webanwendungen und E-Commerce-Projekten gearbeitet, mit verschiedenen Technologien wie Zend Framework, Laravel, Vue.js und Shopware. Besonders die Zusammenarbeit im Team, Pair Programming und testgetriebene Entwicklung haben mir damals eine gute Grundlage gegeben. Nach einigen Jahren hatte ich aber das Gefühl, dass ich den nächsten Schritt machen möchte: mehr Verantwortung übernehmen, selbstständiger arbeiten und mich fachlich weiterentwickeln.</p><p>Deshalb habe ich mich für <strong>Hinke</strong> entschieden. Dort konnte ich als Senior Full-Stack-E-Commerce-Entwickler mehr Verantwortung übernehmen und an fachlich sowie technisch komplexeren Projekten arbeiten. Ein wichtiger Schwerpunkt war der B2C-Shop Pfundskerl auf Basis von OXID eShop. Neben der Weiterentwicklung des Shops habe ich auch Symfony-Anwendungen und Schnittstellen umgesetzt und an der Integration mit dem Warenwirtschaftssystem pixi gearbeitet. Dadurch hatte ich nicht nur einzelne Features auf dem Tisch, sondern konnte mich stärker mit zusammenhängenden Geschäftsprozessen, Systemintegrationen und der technischen Umsetzung beschäftigen.</p><p>Für mich war Hinke deshalb ein sinnvoller nächster Schritt: Ich konnte meine bisherigen PHP-Kenntnisse vertiefen, mehr Verantwortung im Projekt übernehmen und Erfahrungen mit größeren E-Commerce-Abläufen und komplexeren Backend-Anforderungen sammeln.</p>',
                ],
                [
                    'Wann wählen Sie Laravel und wann Symfony? Was ist der Unterschied?',
                    'Ich entscheide nicht nur nach persönlichen Vorlieben, sondern nach den Anforderungen des Projekts. Laravel ist oft sehr effizient für eine schnelle Produktentwicklung. Symfony bietet viel Flexibilität und klare Architekturbausteine, die sich besonders bei komplexen und langfristigen Anwendungen bewähren.',
                    '<p>Für mich sind <strong>Laravel und Symfony</strong> beides leistungsfähige PHP-Frameworks. Der Unterschied liegt weniger darin, dass man mit dem einen etwas grundsätzlich nicht entwickeln kann, sondern eher in den Konzepten, den Konventionen und darin, wie viel Struktur das Framework vorgibt.</p><p><strong>Laravel</strong> wähle ich gerne, wenn wir schnell eine Anwendung oder ein Produkt entwickeln möchten und viele Funktionen direkt nutzen wollen. Laravel bringt eine sehr integrierte Entwicklererfahrung mit: Routing, Eloquent ORM, Migrationen, Queues, Events, Cache, Authentication und viele weitere Bausteine greifen gut ineinander. Dadurch kann ein Team mit relativ wenig Konfiguration produktiv werden. Für APIs, Webanwendungen, interne Tools oder klar abgegrenzte Services ist das oft sehr effizient, besonders wenn das Team mit den Laravel-Konventionen vertraut ist.</p><p><strong>Symfony</strong> ist für mich besonders interessant, wenn eine Anwendung langfristig wachsen soll, viele fachliche Bereiche hat oder komplexe Integrationen benötigt. Symfony bietet sehr flexible und klar getrennte Komponenten, zum Beispiel Dependency Injection, Event Dispatcher, Messenger, Serializer, Validator und Security. Dadurch kann man die Architektur sehr gezielt gestalten und Verantwortlichkeiten sauber voneinander trennen. Gerade bei größeren Backend-Systemen und Microservices schätze ich diese explizite Struktur und die Möglichkeit, einzelne Komponenten unabhängig und kontrolliert einzusetzen.</p><p>Ein weiterer Punkt ist die Architektur: Bei Laravel arbeitet man häufig stärker entlang der vom Framework vorgegebenen Konventionen und kommt dadurch schnell zu einem funktionierenden Ergebnis. Bei Symfony hat man oft mehr explizite Konfiguration und Gestaltungsmöglichkeiten. Das bedeutet aber nicht, dass Laravel keine saubere oder komplexe Architektur ermöglicht oder dass Symfony automatisch besser für große Projekte ist. Beides hängt stark davon ab, wie das Team die Anwendung strukturiert und welche Qualitätsstandards es einhält.</p><p><strong>Meine Entscheidung treffe ich deshalb anhand mehrerer Fragen:</strong> Gibt es bereits eine bestehende Anwendung und ein Framework im Unternehmen? Wie komplex ist die Geschäftslogik? Welche Integrationen und asynchronen Prozesse werden benötigt? Wie groß ist das Team und wie langfristig wird das Produkt weiterentwickelt? Wenn schnelle Umsetzung und ein integriertes Ökosystem im Vordergrund stehen, ist Laravel oft eine sehr gute Wahl. Wenn eine stark strukturierte, modulare Architektur und flexible Komponenten im Mittelpunkt stehen, kann Symfony die passendere Wahl sein. Am Ende ist für mich nicht das Framework entscheidend, sondern eine wartbare Lösung, die zu den fachlichen Anforderungen und zum Team passt.</p>',
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
